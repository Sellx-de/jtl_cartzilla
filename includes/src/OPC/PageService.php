<?php

declare(strict_types=1);

namespace JTL\OPC;

use Exception;
use JTL\Backend\AdminIO;
use JTL\Events\Dispatcher;
use JTL\Events\Event;
use JTL\Helpers\Request;
use JTL\IO\IOResponse;
use JTL\Shop;
use JTL\Smarty\ContextType;
use JTL\Smarty\JTLSmarty;

/**
 * Class PageService
 * @package JTL\OPC
 */
class PageService
{
    /**
     * @var string
     */
    protected string $adminName = '';

    /**
     * @var null|Page
     */
    protected ?Page $curPage = null;

    /**
     * PageService constructor.
     * @param Service $opc
     * @param PageDB  $pageDB
     * @param Locker  $locker
     * @throws \SmartyException
     */
    public function __construct(protected Service $opc, protected PageDB $pageDB, protected Locker $locker)
    {
        $smarty = JTLSmarty::hasInstance(ContextType::FRONTEND)
            ? JTLSmarty::getInstance()
            : new JTLSmarty();
        $smarty->registerPlugin('function', 'opcMountPoint', $this->renderMountPoint(...));
    }

    /**
     * @return string[] list of the OPC service methods to be exposed for AJAX requests
     */
    public function getPageIOFunctionNames(): array
    {
        return [
            'getPageIOFunctionNames',
            'getRevisionList',
            'getDraft',
            'lockDraft',
            'unlockDraft',
            'getDraftPreview',
            'getDraftFinal',
            'getRevisionPreview',
            'publicateDraft',
            'saveDraft',
            'createPagePreview',
            'deleteDraft',
            'changeDraftName',
            'getDraftStatusHtml',
        ];
    }

    /**
     * @param AdminIO $io
     * @throws Exception
     */
    public function registerAdminIOFunctions(AdminIO $io): void
    {
        $adminAccount = $io->getAccount()?->account() ?? false;
        if ($adminAccount === false) {
            throw new Exception('Admin account was not set on AdminIO.');
        }
        $this->adminName = $adminAccount->cLogin;

        foreach ($this->getPageIOFunctionNames() as $functionName) {
            $publicFunctionName = 'opc' . \ucfirst($functionName);
            $io->register($publicFunctionName, [$this, $functionName], null, 'OPC_VIEW');
        }
    }

    /**
     * @param array $params
     * @return string
     * @throws Exception
     */
    public function renderMountPoint(array $params): string
    {
        if (Request::verifyGPCDataInt('quickView')) {
            return '';
        }

        $id          = $params['id'];
        $title       = $params['title'] ?? $id;
        $inContainer = $params['inContainer'] ?? true;
        $output      = '';

        if ($this->opc->isEditMode()) {
            $output = '<div class="opc-area opc-rootarea" data-area-id="' . $id . '" data-title="' . $title
                . '"></div>';
        } elseif (($areaList = $this->getCurPage()->getAreaList())->hasArea($id)) {
            $output = $areaList->getArea($id)?->getFinalHtml($inContainer) ?? '';
        }

        Dispatcher::getInstance()->fire(Event::OPC_PAGESERVICE_RENDERMOUNTPOINT, [
            'output' => &$output,
            'id'     => $id,
            'title'  => $title,
        ]);

        return $output;
    }

    /**
     * @param string $id
     * @return Page
     */
    public function createDraft(string $id): Page
    {
        return (new Page())->setId($id);
    }

    /**
     * @param int $key
     * @return Page
     * @throws Exception
     */
    public function getDraft(int $key): Page
    {
        return $this->pageDB->getDraft($key);
    }

    /**
     * @param string $id
     * @return int
     */
    public function getDraftCount(string $id): int
    {
        return $this->pageDB->getDraftCount($id);
    }

    /**
     * @param int $revId
     * @return Page
     * @throws Exception
     */
    public function getRevision(int $revId): Page
    {
        return $this->pageDB->getRevision($revId);
    }

    /**
     * @param int $key
     * @return \stdClass[]
     */
    public function getRevisionList(int $key): array
    {
        return $this->pageDB->getRevisionList($key);
    }

    /**
     * @param string $id
     * @return Page|null
     * @throws Exception
     */
    public function getPublicPage(string $id): ?Page
    {
        return $this->pageDB->getPublicPage($id);
    }

    /**
     * @param string $id
     * @return Page[]
     * @throws Exception
     */
    public function getPublicPages(string $id): array
    {
        return $this->pageDB->getPublicPages($id, $this->opc->getCustomerGroups());
    }

    /**
     * @param string $id
     * @return int[]
     * @throws Exception
     */
    public function getPublicPageKeys(string $id): array
    {
        $keys = [];
        foreach ($this->getPublicPages($id) as $page) {
            $keys[] = $page->getKey();
        }

        return $keys;
    }

    /**
     * @return Page
     * @throws Exception
     */
    public function getCurPage(): Page
    {
        $isEditMode    = $this->opc->isEditMode();
        $isPreviewMode = $this->opc->isPreviewMode();
        $editedPageKey = $this->opc->getEditedPageKey();
        if ($this->curPage !== null) {
            return $this->curPage;
        }
        if ($this->opc->isOPCInstalled() === false) {
            $this->curPage = new Page();
        } elseif ($isEditMode && $editedPageKey > 0) {
            $this->curPage = $this->getDraft($editedPageKey);
        } elseif ($isPreviewMode) {
            $pageData      = $this->getPreviewPageData();
            $this->curPage = $this->createPageFromData($pageData);
        } else {
            $curPageURL = $this->getCurPageUri();
            $curPageID  = $this->createCurrentPageId();

            if ($curPageID !== null) {
                $this->curPage = $this->getPublicPage($curPageID) ?? new Page();
                $this->curPage->setId($curPageID);
                $this->curPage->setUrl($curPageURL);
            } else {
                $this->curPage = new Page();
                $this->curPage->setIsModifiable(false);
            }
        }

        return $this->curPage;
    }

    /**
     * @param int $langID
     * @return string
     */
    public function getCurPageUri(int $langID = 0): string
    {
        $uri = $_SERVER['HTTP_X_REWRITE_URL'] ?? $_SERVER['REQUEST_URI'];
        if ($langID > 0) {
            foreach ($_SESSION['Sprachen'] as $language) {
                if ($language->id === $langID) {
                    $uri = $language->url;
                    break;
                }
            }
        }
        $shopPath    = \parse_url(Shop::getURL(), \PHP_URL_PATH) ?? '/';
        $baseURLdata = \parse_url($uri);
        if (!isset($baseURLdata['path'])) {
            return '/';
        }
        $result = \mb_substr($baseURLdata['path'], \mb_strlen($shopPath));
        if (isset($baseURLdata['query'])) {
            $result .= '?' . $baseURLdata['query'];
        }

        return '/' . \ltrim($result, '/');
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function isCurPageModifiable(): bool
    {
        return $this->getCurPage()->isModifiable();
    }

    /**
     * @param string     $type
     * @param int|string $id
     * @param int        $langID
     * @param array|null $params
     * @return string
     */
    public function createGenericPageId(string $type, $id, int $langID = 0, $params = null): string
    {
        if ($langID === 0) {
            $langID = Shop::getLanguageID();
        }
        $pageIdObj = (object)[
            'lang' => $langID,
            'type' => $type,
            'id'   => $id
        ];
        if ($params !== null) {
            if (!empty($params['MerkmalFilter'])) {
                $pageIdObj->attribs = $params['MerkmalFilter'];
            }
            if (!empty($params['cPreisspannenFilter'])) {
                $pageIdObj->range = $params['cPreisspannenFilter'];
            }
            if (!empty($params['kHerstellerFilter'])) {
                $pageIdObj->manufacturerFilter = $params['kHerstellerFilter'];
            }
        }
        return \json_encode($pageIdObj, \JSON_THROW_ON_ERROR | \JSON_INVALID_UTF8_SUBSTITUTE);
    }

    /**
     * @param int $langID
     * @return string|null
     */
    public function createCurrentPageId(int $langID = 0): ?string
    {
        $params = Shop::getParameters();
        if ($params['kKategorie'] > 0) {
            return $this->createGenericPageId('category', $params['kKategorie'], $langID, $params);
        }
        if ($params['kHersteller'] > 0) {
            return $this->createGenericPageId('manufacturer', $params['kHersteller'], $langID, $params);
        }
        if ($params['kVariKindArtikel'] > 0) {
            return $this->createGenericPageId('product', $params['kVariKindArtikel'], $langID, $params);
        }
        if ($params['kArtikel'] > 0) {
            return $this->createGenericPageId('product', $params['kArtikel'], $langID, $params);
        }
        if ($params['kLink'] > 0) {
            if (\in_array($params['nLinkart'], [\LINKTYP_BESTELLVORGANG, \LINKTYP_BESTELLABSCHLUSS], true)) {
                return null;
            }
            return $this->createGenericPageId('link', $params['kLink'], $langID, $params);
        }
        if ($params['kMerkmalWert'] > 0) {
            return $this->createGenericPageId('attrib', $params['kMerkmalWert'], $langID, $params);
        }
        if ($params['kSuchspecial'] > 0) {
            return $this->createGenericPageId('special', $params['kSuchspecial'], $langID, $params);
        }
        if ($params['kNews'] > 0) {
            return $this->createGenericPageId('news', $params['kNews'], $langID, $params);
        }
        if ($params['kNewsKategorie'] > 0) {
            return $this->createGenericPageId('newscat', $params['kNewsKategorie'], $langID, $params);
        }
        if (\mb_strlen($params['cSuche']) > 0) {
            return $this->createGenericPageId('search', $params['cSuche'], $langID, $params);
        }
        return $this->createGenericPageId('other', \md5(\serialize($params)), $langID, $params);
    }

    /**
     * @param string $id
     * @return Page[]
     * @throws Exception
     */
    public function getDrafts(string $id): array
    {
        if (!$this->opc->isOPCInstalled()) {
            return [];
        }
        $drafts          = $this->pageDB->getDrafts($id);
        $publicDraftKeys = $this->getPublicPageKeys($id);
        \usort($drafts, static function (Page $a, Page $b) use ($publicDraftKeys): int {
            return $a->getStatus($publicDraftKeys) - $b->getStatus($publicDraftKeys);
        });

        return $drafts;
    }

    /**
     * @param int $key
     * @return string[]
     * @throws Exception
     */
    public function getDraftPreview(int $key): array
    {
        return $this->getDraft($key)->getAreaList()->getPreviewHtml();
    }

    /**
     * @param int $key
     * @return array<int, string>
     * @throws Exception
     */
    public function getDraftFinal(int $key): array
    {
        return $this->getDraft($key)->getAreaList()->getFinalHtml();
    }

    /**
     * @param int $revID
     * @return string[]
     * @throws Exception
     */
    public function getRevisionPreview(int $revID): array
    {
        return $this->getRevision($revID)->getAreaList()->getPreviewHtml();
    }

    /**
     * @param array<mixed> $data
     * @throws Exception
     */
    public function saveDraft(array $data): void
    {
        $this->pageDB->saveDraft($this->getDraft($data['key'])->deserialize($data));
    }

    /**
     * @param array<mixed> $data
     * @throws Exception
     */
    public function publicateDraft(array $data): void
    {
        $this->pageDB->saveDraftPublicationStatus((new Page())->deserialize($data));
    }

    /**
     * @param string $id
     * @return $this
     */
    public function deletePage(string $id): self
    {
        $this->pageDB->deletePage($id);

        return $this;
    }

    /**
     * @param int $key
     * @return $this
     */
    public function deleteDraft(int $key): self
    {
        $this->pageDB->deleteDraft($key);

        return $this;
    }

    /**
     * @param int $key
     * @return int
     *      0 if the draft could be locked
     *      1 if it is still locked by some other user
     *      2 if the Shop has pending database updates
     * @throws Exception
     */
    public function lockDraft(int $key): int
    {
        if ($this->pageDB->shopHasPendingUpdates()) {
            return 2;
        }

        return $this->locker->lock($this->adminName, $this->getDraft($key)) ? 0 : 1;
    }

    /**
     * @param int $key
     * @throws Exception
     */
    public function unlockDraft(int $key): void
    {
        $this->locker->unlock((new Page())->setKey($key));
    }

    /**
     * @param array<mixed> $data
     * @return Page
     * @throws Exception
     */
    public function createPageFromData(array $data): Page
    {
        return (new Page())->deserialize($data);
    }

    /**
     * @param array<mixed> $data
     * @return string[]
     * @throws Exception
     */
    public function createPagePreview(array $data): array
    {
        return $this->createPageFromData($data)->getAreaList()->getPreviewHtml();
    }

    /**
     * @return array<mixed>
     * @throws \JsonException
     */
    public function getPreviewPageData()
    {
        return \json_decode(Request::verifyGPDataString('pageData'), true, 512, \JSON_THROW_ON_ERROR);
    }

    /**
     * @param int    $draftKey
     * @param string $draftName
     * @throws Exception
     */
    public function changeDraftName(int $draftKey, string $draftName): void
    {
        $this->pageDB->saveDraftName($draftKey, $draftName);
    }

    /**
     * @param int $draftKey
     * @return IOResponse
     * @throws \SmartyException
     */
    public function getDraftStatusHtml(int $draftKey): IOResponse
    {
        $draft    = $this->getDraft($draftKey);
        $smarty   = Shop::Smarty(false, ContextType::BACKEND);
        $response = new IOResponse();

        $draftStatusHtml = $smarty->assign('page', $draft)
            ->fetch(\PFAD_ROOT . \PFAD_ADMIN . 'opc/tpl/draftstatus.tpl');

        $response->assignDom('opcDraftStatus', 'innerHTML', $draftStatusHtml);

        return $response;
    }
}
