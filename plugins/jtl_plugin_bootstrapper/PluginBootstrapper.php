<?php declare(strict_types=1);

namespace Plugin\jtl_plugin_bootstrapper;

use DateTime;
use Exception;
use JTL\DB\DbInterface;
use JTL\DB\ReturnType;
use JTL\Filesystem\LocalFilesystem;
use JTL\Plugin\PluginInterface;
use JTL\Shop;
use JTL\Smarty\JTLSmarty;
use League\Flysystem\FilesystemOperator;
use stdClass;
use ZipArchive;

/**
 * Class PluginBootstrapper
 * @package Plugin\jtl_plugin_bootstrapper
 */
class PluginBootstrapper
{
    /**
     * @var array
     */
    private array $postData = [];

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var string|null
     */
    private ?string $author = null;

    /**
     * @var string|null
     */
    private ?string $url = null;

    /**
     * @var string|null
     */
    private ?string $flushTags = null;

    /**
     * @var string|null
     */
    private ?string $pluginID = null;

    /**
     * @var int
     */
    private int $xmlVersion = 100;

    /**
     * @var string
     */
    private string $version = '1.0.0';

    /**
     * @var string|null
     */
    private ?string $minShopVersion = null;

    /**
     * @var string|null
     */
    private ?string $maxShopVersion = null;

    /**
     * @var string|null
     */
    private ?string $icon = null;

    /**
     * @var string|null
     */
    private ?string $pluginDir = null;

    /**
     * @var string|null
     */
    private ?string $infoXML = null;

    /**
     * @var bool
     */
    private bool $hasCss = false;

    /**
     * @var bool
     */
    private bool $hasJs = false;

    /**
     * @var array{array{name: string, priority: int, position: string}}
     */
    private array $jsFiles = [];

    /**
     * @var array{array{name: string, priority: string}}
     */
    private array $cssFiles = [];

    /**
     * @var bool
     */
    private bool $hasHooks = false;

    /**
     * @var bool
     */
    private bool $hasFrontendLinks = false;

    /**
     * @var bool
     */
    private bool $hasLangVars = false;

    /**
     * @var bool
     */
    private bool $hasSettings = false;

    /**
     * @var bool
     */
    private bool $hasMailTemplates = false;

    /**
     * @var bool
     */
    private bool $hasBoxes = false;

    /**
     * @var bool
     */
    private bool $hasWidgets = false;

    /**
     * @var bool
     */
    private bool $hasCustomLinks = false;

    /**
     * @var bool
     */
    private bool $createLocale = true;

    /**
     * @var array{array{Name: string, Filename: string}}
     */
    private array $adminTabs = [];

    /**
     * @var array{array{const: int, id: int, priority: int}}
     */
    private array $hooks = [];

    /**
     * @var array{array{Name: string, Available: int, TemplateFile: string}}
     */
    private array $boxes = [];

    /**
     * @var array{array{
     *     Class: string,
     *     Description:string,
     *     Active: int,
     *     Expanded: int,
     *     Title: string,
     *     Container: string
     * }}
     */
    private array $widgets = [];

    /**
     * @var array{array{
     *     Name: string,
     *     Description: string,
     *     VariableLocalized_ENG: string,
     *     VariableLocalized_GER: string
     * }}
     */
    private array $langVars = [];

    /**
     * @var array{array{
     *     Name: string,
     *     ValueName: string,
     *     type: string,
     *     Description: string,
     *     initialValue: string,
     *     sort: int,
     *     conf: string,
     *     source: string|null
     * }}
     */
    private array $settings = [];

    /**
     * @var array{array{
     *     Filename:string,
     *     Name:string,
     *     Template:string,
     *     FullscreenTemplate:string,
     *     VisibleAfterLogin:string,
     *     PrintButton:string,
     *     SSL:string,
     *     LinkGroup:string,
     *     LinkLanguage_Seo:string,
     *     LinkLanguage_Name:string,
     *     LinkLanguage_Title:string,
     *     LinkLanguage_MetaTitle:string,
     *     LinkLanguage_MetaKeywords:string,
     *     LinkLanguage_MetaDescription:string
     * }}
     */
    private array $frontendLinks = [];

    /**
     * @var array
     */
    private array $mailTemplates = [];

    /**
     * @var array
     */
    private array $errors = [];

    /**
     * @var array
     */
    private array $localizations = ['de-DE', 'en-GB'];

    /**
     * @var bool
     */
    private bool $createModels = false;

    /**
     * @var array
     */
    private array $tables = [];

    /**
     * @var FilesystemOperator
     */
    private FilesystemOperator $fs;

    /**
     * @param PluginInterface $plugin
     * @param JTLSmarty       $smarty
     * @param DbInterface     $db
     * @param bool            $debug
     */
    public function __construct(
        private PluginInterface $plugin,
        private JTLSmarty $smarty,
        private DbInterface $db,
        private bool $debug = false
    ) {
        $this->fs = Shop::Container()->get(LocalFilesystem::class);
    }

    /**
     * @param string $path
     * @param bool   $legacy
     * @return bool|stdClass
     */
    public function loadPlugin(string $path, bool $legacy = false): bool|stdClass
    {
        $path       = \rtrim($path, '/') . '/';
        $base       = $legacy === true
            ? \PFAD_ROOT . \PFAD_PLUGIN
            : \PFAD_ROOT . \PLUGIN_DIR;
        $pluginPath = \realpath($base . $path);
        if ($pluginPath === false
            || !\is_dir($pluginPath)
            || !\str_contains($pluginPath, $base)
            || !\file_exists($pluginPath . '/info.xml')
        ) {
            return false;
        }

        return $this->loadPluginFromXML($pluginPath . '/info.xml');
    }

    /**
     * load existing plugin via path to info.xml
     *
     * @param string $xmlPath
     * @return bool|stdClass
     */
    private function loadPluginFromXML(string $xmlPath): bool|stdClass
    {
        if (!\file_exists($xmlPath)) {
            return false;
        }
        $xml                    = \simplexml_load_string(\file_get_contents($xmlPath));
        $plugin                 = new stdClass();
        $plugin->Name           = (string)$xml->Name;
        $plugin->Description    = \htmlspecialchars((string)$xml->Description);
        $plugin->Author         = (string)$xml->Author;
        $plugin->URL            = (string)$xml->URL;
        $plugin->MinShopVersion = (string)($xml->MinShopVersion ?? $xml->ShopVersion);
        $plugin->MaxShopVersion = isset($xml->MaxShopVersion) ? (string)$xml->MaxShopVersion : null;
        $plugin->Icon           = (string)$xml->Icon;
        $plugin->PluginID       = (string)$xml->PluginID;
        $plugin->FlushTags      = (string)$xml->Install->FlushTags;
        $plugin->Settings       = [];
        $plugin->Customlinks    = [];
        $plugin->Frontendlinks  = [];
        $plugin->Boxes          = [];
        $plugin->Widgets        = [];
        $plugin->Install        = new stdClass();
        $plugin->Emailtemplates = [];

        if (!empty($xml->Install->Hooks->Hook)) {
            $plugin->Hooks = [];
            foreach ($xml->Install->Hooks->Hook as $hook) {
                if ($hook['id'] === null) {
                    continue;
                }
                $file               = (string)$hook;
                $hookData           = new stdClass();
                $hookData->file     = $file;
                $hookData->id       = (int)$hook['id'];
                $hookData->priority = (int)($hook['priority'] ?? 5);
                $plugin->Hooks[]    = $hookData;
            }
        }
        if (!empty($xml->Install->Locales->Variable)) {
            $plugin->LangVars = [];
            foreach ($xml->Install->Locales->Variable as $langVar) {
                $lv              = new stdClass();
                $lv->Description = (string)$langVar->Description;
                $lv->Name        = (string)$langVar->Name;
                $lv->Values      = [];
                foreach ($langVar->VariableLocalized as $localization) {
                    $lv->Values[(string)$localization->attributes()] = (string)$localization;
                }
                $plugin->LangVars[] = $lv;
            }
        }
        if (!empty($xml->Install->Adminmenu)) {
            if (!empty($xml->Install->Adminmenu->Customlink)) {
                if (\is_array($xml->Install->Adminmenu->Customlink)) {
                    $arr = $xml->Install->Adminmenu->Customlink;
                } else {
                    $arr = [$xml->Install->Adminmenu->Customlink];
                }
                foreach ($arr as $customLink) {
                    $cl                    = new stdClass();
                    $cl->Name              = (string)$customLink->Name;
                    $cl->Filename          = (string)$customLink->Filename;
                    $cl->Sort              = (int)$customLink->attributes();
                    $plugin->CustomLinks[] = $cl;
                }
            }

            if (!empty($xml->Install->Adminmenu->Settingslink)) {
                $sl           = new stdClass();
                $sl->Sort     = (int)$xml->Install->Adminmenu->Settingslink->attributes();
                $sl->Settings = [];
                foreach ($xml->Install->Adminmenu->Settingslink->Setting as $_setting) {
                    $setting              = new stdClass();
                    $setting->Name        = (string)$_setting->Name;
                    $setting->ValueName   = (string)$_setting->ValueName;
                    $setting->Description = (string)$_setting->Description;
                    foreach ($_setting->attributes() as $attribute => $value) {
                        $setting->$attribute = (string)$value;
                    }
                    $sl->Settings[] = $setting;
                }
                $plugin->Settings[] = $sl;
            }
        }
        if (!empty($xml->Install->FrontendLink->Link)) {
            foreach ($xml->Install->FrontendLink->Link as $_frontendLink) {
                $fl                     = new stdClass();
                $fl->Name               = (string)$_frontendLink->Name;
                $fl->Filename           = (string)$_frontendLink->Filename;
                $fl->Template           = (string)$_frontendLink->Template;
                $fl->FullscreenTemplate = (string)$_frontendLink->FullscreenTemplate;
                $fl->VisibleAfterLogin  = (string)$_frontendLink->VisibleAfterLogin;
                $fl->PrintButton        = (string)$_frontendLink->PrintButton;
                $fl->SSL                = (int)$_frontendLink->SSL;
                $fl->LinkGroup          = (string)$_frontendLink->LinkGroup;

                if (isset($_frontendLink->LinkLanguage)) {
                    $fl->LinkLanguage = [];
                    foreach ($_frontendLink->LinkLanguage as $_linkLanguage) {
                        $ll                  = new stdClass();
                        $ll->Seo             = (string)$_linkLanguage->Seo;
                        $ll->Name            = (string)$_linkLanguage->Name;
                        $ll->Title           = (string)$_linkLanguage->Title;
                        $ll->MetaTitle       = (string)$_linkLanguage->MetaTitle;
                        $ll->MetaKeywords    = (string)$_linkLanguage->MetaKeywords;
                        $ll->MetaDescription = (string)$_linkLanguage->MetaDescription;

                        foreach ($_linkLanguage->attributes() as $k => $v) {
                            $ll->$k = (string)$v;
                        }
                        $fl->LinkLanguage[] = $ll;
                    }
                }
                $plugin->Frontendlinks[] = $fl;
            }
        }
        if (!empty($xml->Install->Emailtemplate->Template)) {
            foreach ($xml->Install->Emailtemplate->Template as $_template) {
                $tpl              = new stdClass();
                $tpl->Name        = (string)$_template->Name;
                $tpl->Description = (string)$_template->Description;
                $tpl->Type        = (string)$_template->Type;
                $tpl->ModulId     = (string)$_template->ModulId;
                $tpl->Active      = (string)$_template->Active;
                $tpl->AKZ         = (int)$_template->AKZ;
                $tpl->AGB         = (int)$_template->AGB;
                $tpl->WRB         = (int)$_template->WRB;
                $tpl->nWRBForm    = (int)$_template->nWRBForm;

                if (isset($_template->TemplateLanguage)) {
                    $tpl->TemplateLanguage = [];
                    foreach ($_template->TemplateLanguage as $_tplLanguage) {
                        $templateLanguage              = new stdClass();
                        $templateLanguage->Subject     = (string)$_tplLanguage->Subject;
                        $templateLanguage->ContentHtml = (string)$_tplLanguage->ContentHtml;
                        $templateLanguage->ContentText = (string)$_tplLanguage->ContentText;

                        foreach ($_tplLanguage->attributes() as $k => $v) {
                            $templateLanguage->$k = (string)$v;
                        }
                        $tpl->TemplateLanguage[] = $templateLanguage;
                    }
                }
                $plugin->Emailtemplates[] = $tpl;
            }
        }
        if (!empty($xml->Install->Boxes->Box)) {
            foreach ($xml->Install->Boxes->Box as $_box) {
                $box               = new stdClass();
                $box->Available    = (int)$_box->Available;
                $box->Name         = (string)$_box->Name;
                $box->TemplateFile = (string)$_box->TemplateFile;
                $plugin->Boxes[]   = $box;
            }
        }
        if (!empty($xml->Install->AdminWidget->Widget)) {
            foreach ($xml->Install->AdminWidget->Widget as $_widget) {
                $widget               = new stdClass();
                $widget->Active       = (int)$_widget->Active;
                $widget->Expanded     = (int)$_widget->Expanded;
                $widget->Pos          = (int)$_widget->Pos;
                $widget->Class        = (string)$_widget->Class;
                $widget->TemplateFile = (string)$_widget->TemplateFile;
                $widget->Description  = (string)$_widget->Description;
                $widget->Title        = (string)$_widget->Title;
                $widget->Container    = (string)$_widget->Container;
                $plugin->Widgets[]    = $widget;
            }
        }

        $plugin->Install->JS  = $xml->Install->JS ?? null;
        $plugin->Install->CSS = $xml->Install->CSS ?? null;

        return $plugin;
    }

    /**
     * @param array $postData
     * @param bool  $deleteExisting
     * @return $this
     */
    public function bootstrap(array $postData, bool $deleteExisting = false): self
    {
        if ($this->debug === true) {
            Shop::dbg($postData, false, 'POST');
        }
        $this->postData = $postData;

        return $this->parseData($deleteExisting);
    }

    /**
     * @param string $path
     * @return false|void
     */
    public function createZipFile(string $path)
    {
        $base       = \rtrim($path, '/');
        $path       = $base . '/';
        $pluginPath = \realpath(\PFAD_ROOT . \PLUGIN_DIR . $path);
        if ($pluginPath === false
            || !\is_dir($pluginPath)
            || !\str_contains($pluginPath, \PFAD_ROOT . \PLUGIN_DIR)
            || !\file_exists($pluginPath . '/info.xml')
        ) {
            return false;
        }
        $zipFile = \PFAD_ROOT . \PFAD_COMPILEDIR . $base . '.zip';
        $archive = new ZipArchive();
        $file    = $archive->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE);
        if ($file === false) {
            return false;
        }
        $archive->addEmptyDir($path);
        $this->folderToZip($pluginPath, $archive, \strlen(\PFAD_ROOT . \PLUGIN_DIR));
        if (!$archive->close()) {
            return false;
        }
        \header('Content-Type: application/zip');
        \header('Content-disposition: attachment; filename=' . $base . '.zip');
        \header('Content-Length: ' . \filesize($zipFile));
        \readfile($zipFile);
        \unlink($zipFile);
        exit();
    }

    /**
     * @param string     $folder
     * @param ZipArchive $zipFile
     * @param int        $exclusiveLength
     */
    private function folderToZip(string $folder, ZipArchive $zipFile, int $exclusiveLength): void
    {
        $handle = \opendir($folder);
        while (($f = \readdir($handle)) !== false) {
            if ($f === '.' || $f === '..') {
                continue;
            }
            $filePath = $folder . '/' . $f;
            // Remove prefix from file path before adding to zip.
            $localPath = \substr($filePath, $exclusiveLength);
            if (\is_file($filePath)) {
                $zipFile->addFile($filePath, $localPath);
            } elseif (\is_dir($filePath)) {
                // Add sub-directory.
                $zipFile->addEmptyDir($localPath);
                $this->folderToZip($filePath, $zipFile, $exclusiveLength);
            }
        }
        \closedir($handle);
    }

    /**
     * create the plugin
     *
     * @return $this
     */
    public function create(): self
    {
        if ($this->validateBaseInfo()) {
            $this->createDirsAndFiles()
                ->generateLocale()
                ->writeXML();
        }

        return $this;
    }

    /**
     * @return bool
     */
    private function validateBaseInfo(): bool
    {
        $ok = true;
        if (empty($this->name)) {
            $this->errors[] = \__('Plugin name must not be empty.');
            $ok             = false;
        }
        if (empty($this->description)) {
            $this->errors[] = \__('Plugin description must not be empty.');
            $ok             = false;
        }
        if (empty($this->author)) {
            $this->errors[] = \__('Plugin author must not be empty.');
            $ok             = false;
        }
        if (empty($this->url)) {
            $this->errors[] = \__('Plugin homepage must not be empty.');
            $ok             = false;
        }
        if (empty($this->pluginID)) {
            $this->errors[] = \__('Plugin ID must not be empty.');
            $ok             = false;
        }
        if (empty($this->pluginDir)) {
            $this->errors[] = \__('Plugin dir could not be generated.');
            $ok             = false;
        }

        return $ok;
    }

    /**
     * prepare array of more or less important information as an ajax response
     *
     * @return array
     */
    public function getResponse(): array
    {
        return [
            'files'     => $this->getFileList(),
            'dirs'      => $this->getDirList(),
            'plugin'    => $this->pluginID,
            'plugindir' => $this->pluginDir,
            'errors'    => $this->errors,
            'POST'      => $this->postData
        ];
    }

    /**
     * @return $this
     */
    private function generateLocale(): self
    {
        if (!$this->createLocale) {
            return $this;
        }
        $msgIDs   = [];
        $msgIDs[] = $this->author;
        $msgIDs[] = $this->description;
        foreach ($this->adminTabs as $adminTab) {
            $msgIDs[] = $adminTab['Name'];
        }
        foreach ($this->settings as $setting) {
            $msgIDs[] = $setting['Name'];
            $msgIDs[] = $setting['Description'];
        }
        $msgIDs = \array_map('\addslashes', $msgIDs);
        foreach ($this->localizations as $localization) {
            $file    = $this->pluginDir . '/locale/' . $localization . '/base.po';
            $content = '';
            foreach ($msgIDs as $msgID) {
                $content .= 'msgid "' . $msgID . '"' . "\n";
                $content .= 'msgstr "@todo"' . "\n\n";
            }
            try {
                $this->fs->write($file, $content);
            } catch (Exception) {
            }
        }
        foreach ($this->widgets as $widget) {
            foreach ($this->localizations as $localization) {
                $file    = $this->pluginDir . '/locale/' . $localization . '/widgets/' . $widget['Class'] . '.po';
                $content = '';
                $content .= 'msgid "' . $widget['Class'] . '_title"' . "\n";
                $content .= 'msgstr "@todo"' . "\n\n";
                $content .= 'msgid "' . $widget['Class'] . '_desc"' . "\n";
                $content .= 'msgstr "@todo"' . "\n\n";
                try {
                    $this->fs->write($file, $content);
                } catch (Exception) {
                }
            }
        }

        return $this;
    }

    /**
     * create all directories and files for the new plugin
     *
     * @return $this
     */
    private function createDirsAndFiles(): self
    {
        $res      = true;
        $dirList  = $this->getDirList();
        $fileList = $this->getFileList();

        if ($this->debug === true) {
            Shop::dbg($dirList, false, 'dirlist');
            Shop::dbg($fileList, false, 'filelist');
        }
        foreach ($dirList as $dir) {
            try {
                $this->fs->createDirectory($dir);
            } catch (Exception) {
                $res            = false;
                $this->errors[] = \sprintf(\__('Could not create dir %s.'), $dir);
                break;
            }
        }
        $this->smarty->assign('pluginID', $this->pluginID)
            ->assign('adminTabs', $this->adminTabs)
            ->assign('author', $this->author);
        foreach ($fileList as $file) {
            if ($this->fs->fileExists($file['file'])) {
                continue;
            }
            if ($file['file'] === $this->pluginDir . '/Bootstrap.php') {
                $hookList = [];
                foreach ($this->hooks as $hook) {
                    $hook['const'] = $this->getHookNameByID((int)$hook['id']);
                    $hookList[]    = $hook;
                }
                $linkList = [];
                foreach ($this->frontendLinks as $link) {
                    if ($link['Filename'] === null) {
                        $linkList[] = $link;
                    }
                }
                $content = $this->smarty->assign('hooks', $hookList)
                    ->assign('links', $linkList)
                    ->fetch($this->plugin->getPaths()->getAdminPath() . 'tpl/Bootstrap.tpl');
                try {
                    $this->fs->write($file['file'], $content);
                } catch (Exception) {
                    $res = false;
                }
            } elseif ($file['type'] === 'migration') {
                $table  = $file['table'];
                $stmt   = ' -- could not find table ' . $table;
                $exists = \count($this->db->queryPrepared(
                        'SHOW TABLES LIKE :tbl',
                        ['tbl' => $table],
                        ReturnType::ARRAY_OF_OBJECTS
                    )) > 0;
                if ($exists === true) {
                    $res = $this->db->query(
                        'SHOW CREATE TABLE ' . $table,
                        ReturnType::SINGLE_OBJECT
                    );
                    if (isset($res->Table) && $res->Table === $table) {
                        foreach (\get_object_vars($res) as $v) {
                            if (\stripos($v, 'CREATE TABLE') === 0) {
                                $stmt = \str_replace(
                                    'CREATE TABLE',
                                    /** @lang text */ 'CREATE TABLE IF NOT EXISTS',
                                    \addslashes($v)
                                );
                            }
                        }
                        if ($this->createModels === true) {
                            try {
                                $this->fs->write(
                                    $this->pluginDir . '/Models/' . \ucfirst($table) . 'Model' . '.php',
                                    $this->getDataModel($table)
                                );
                            } catch (Exception) {
                                $res = false;
                            }
                        }
                    }
                }
                $content = $this->smarty->assign('createTableStatement', $stmt)
                    ->assign('dropTableStatement', 'DROP TABLE IF EXISTS `' . $table . '`')
                    ->assign('class', $file['class'])
                    ->fetch($this->plugin->getPaths()->getAdminPath() . 'tpl/Migration.tpl');
                try {
                    $this->fs->write($file['file'], $content);
                } catch (Exception) {
                    $res = false;
                }
            } elseif ($file['type'] === 'widgetClass') {
                $content = $this->smarty->assign('widgetClass', $file['class'])
                    ->assign('widgetTemplateFile', $file['tpl'])
                    ->fetch($this->plugin->getPaths()->getAdminPath() . 'tpl/WidgetClass.tpl');
                try {
                    $this->fs->write($file['file'], $content);
                } catch (Exception) {
                    $res = false;
                }
            } elseif ($file['type'] === 'backendtpl') {
                try {
                    $this->fs->write(
                        $file['file'],
                        "<h2>Example Tab</h2>\n"
                        . 'Example var 1: {$example_var1}<br>'
                        . "\n" . 'Example var 2: {$example_var2}'
                    );
                } catch (Exception) {
                    $res = false;
                }
            } else {
                try {
                    $this->fs->write($file['file'], '');
                } catch (Exception) {
                    $res = false;
                }
            }
            if ($res === false) {
                $this->errors[] = \sprintf(\__('Could not create file %s.'), $file['file']);
                break;
            }
        }

        return $this;
    }

    /**
     * @param string $table
     * @return string
     */
    private function getDataModel(string $table): string
    {
        $datetime  = new DateTime('NOW');
        $table     = \strtolower($table);
        $modelName = \ucfirst($table) . 'Model';
        $tableDesc = [];
        $attribs   = $this->db->getPDO()->query('DESCRIBE ' . $table);
        $typeMap   = [
            'bool|boolean',
            'int|tinyint|smallint|mediumint|integer|bigint|decimal|dec',
            'float|double',
            'DateTime|date|datetime|timestamp',
            'DateInterval|time',
            'string|year|char|varchar|tinytext|text|mediumtext|enum',
        ];

        foreach ($attribs as $attrib) {
            $dataType    = \preg_match('/^([a-zA-Z0-9]+)/', $attrib['Type'], $hits) ? $hits[1] : $attrib['Type'];
            $tableDesc[] = (object)[
                'name'         => "'{$attrib['Field']}'",
                'phpName'      => $attrib['Field'],
                'dataType'     => "'{$dataType}'",
                'phpType'      => \array_reduce($typeMap, static function ($carry, $item) use ($dataType) {
                    if (!isset($carry) && \preg_match("/{$item}/", $dataType)) {
                        $carry = \explode('|', $item, 2)[0];
                    }

                    return $carry;
                }),
                'default'      => isset($attrib['Default'])
                    ? "self::cast('{$attrib['Default']}', '{$dataType}')"
                    : 'null',
                'nullable'     => $attrib['Null'] === 'YES' ? 'true' : 'false',
                'isPrimaryKey' => $attrib['Key'] === 'PRI' ? 'true' : 'false',
            ];
        }

        return $this->smarty->assign('tableName', $table)
            ->assign('modelName', $modelName)
            ->assign('created', $datetime->format(DateTime::RSS))
            ->assign('tableDesc', $tableDesc)
            ->fetch($this->plugin->getPaths()->getAdminPath() . 'tpl/Model.tpl');
    }

    /**
     * @param bool $deleteExisting
     * @return $this
     */
    private function parseData(bool $deleteExisting = false): self
    {
        $this->name           = $this->postData['Name'];
        $this->description    = $this->postData['Description'];
        $this->author         = $this->postData['Author'];
        $this->url            = $this->postData['URL'];
        $this->pluginID       = $this->postData['PluginID'];
        $this->flushTags      = (!empty($this->postData['FlushTags']))
            ? $this->postData['FlushTags']
            : null;
        $this->minShopVersion = !empty($this->postData['ShopVersion'])
            ? $this->postData['ShopVersion']
            : null;
        $this->maxShopVersion = !empty($this->postData['MaxShopVersion'])
            ? $this->postData['MaxShopVersion']
            : null;
        $this->icon           = $this->postData['Icon'] ?? null;

        if (!empty(\trim($this->postData['create-table']))) {
            $this->tables = \array_map('\trim', \explode(',', $this->postData['create-table']));
        }
        if (!empty(\trim($this->postData['Version'] ?? ''))) {
            $this->version = \trim($this->postData['Version']);
        }
        $this->createModels = ($this->postData['createModels'] ?? '') === 'on';

        foreach ($this->postData['Install-CSS-file-name'] ?? [] as $idx => $file) {
            $this->cssFiles[] = [
                'name'     => $file,
                'priority' => $this->postData['Install-CSS-file-priority'][$idx] ?? 5
            ];
        }
        foreach ($this->postData['Install-JS-file-name'] ?? [] as $idx => $file) {
            $this->jsFiles[] = [
                'name'     => $file,
                'priority' => $this->postData['Install-JS-file-priority'][$idx] ?? 5,
                'position' => $this->postData['Install-JS-file-position'][$idx] ?? 'body'
            ];
        }
        foreach ($this->postData['Install-Hooks-Hook-ID'] ?? [] as $idx => $hookFile) {
            $this->hooks[] = [
                'id'       => (int)$this->postData['Install-Hooks-Hook-ID'][$idx],
                'priority' => (int)($this->postData['Install-Hooks-Priority'][$idx] ?? 5)
            ];
        }

        $boxNames = $this->postData['Install-Boxes-Box-Name'] ?? [];
        $boxTpls  = $this->postData['Install-Boxes-Box-TemplateFile'] ?? [];
        $boxAvail = $this->postData['Install-Boxes-Box-Available'] ?? [];
        if (\count($boxNames) === \count($boxTpls)) {
            foreach ($boxNames as $idx => $_box) {
                $this->boxes[] = [
                    'Name'         => $_box,
                    'Available'    => $boxAvail[$idx] ?? 0,
                    'TemplateFile' => $boxTpls[$idx]
                ];
            }
        }
        $wClasses = $this->postData['Install-AdminWidget-Widget-Class'] ?? [];
        $wTpls    = $this->postData['Install-AdminWidget-Widget-TemplateFile'] ?? [];
        if (\count($wClasses) === \count($wTpls)) {
            foreach ($wClasses as $idx => $widget) {
                $this->widgets[] = [
                    'Class'        => $widget,
                    'Description'  => $this->postData['Install-AdminWidget-Widget-Description'][$idx] ?? '',
                    'TemplateFile' => $wTpls[$idx],
                    'Active'       => (int)($this->postData['Install-AdminWidget-Widget-Active'][$idx] ?? 1),
                    'Expanded'     => (int)($this->postData['Install-AdminWidget-Widget-Expanded'][$idx] ?? 1),
                    'Title'        => $this->postData['Install-AdminWidget-Widget-Title'][$idx] ?? '',
                    'Container'    => $this->postData['Install-AdminWidget-Widget-Container'][$idx] ?? 'center'
                ];
            }
        }

        if (isset(
                $this->postData['Locales-Variable-Description'],
                $this->postData['Locales-Variable_GER'],
                $this->postData['Locales-Variable_ENG']
            )
            && !empty($this->postData['Locales-Variable-Name'])
            && \count($this->postData['Locales-Variable-Name']) ===
            \count($this->postData['Locales-Variable-Description'])
        ) {
            foreach ($this->postData['Locales-Variable-Name'] as $idx => $_langVar) {
                $this->langVars[] = [
                    'Name'                  => $_langVar,
                    'Description'           => $this->postData['Locales-Variable-Description'][$idx],
                    'VariableLocalized_ENG' => $this->postData['Locales-Variable_ENG'][$idx],
                    'VariableLocalized_GER' => $this->postData['Locales-Variable_GER'][$idx]
                ];
            }
        }

        if (!empty($this->postData['Settingslink-Setting-Name'])
            && !empty($this->postData['Settingslink-Setting-ValueName'])
            && !empty($this->postData['Settingslink-Setting-type'])
            && \count($this->postData['Settingslink-Setting-Name']) ===
            \count($this->postData['Settingslink-Setting-ValueName'])
            && \count($this->postData['Settingslink-Setting-type']) ===
            \count($this->postData['Settingslink-Setting-ValueName'])
        ) {
            foreach ($this->postData['Settingslink-Setting-Name'] as $idx => $_setting) {
                $setting = [
                    'Name'         => $_setting,
                    'ValueName'    => $this->postData['Settingslink-Setting-ValueName'][$idx],
                    'type'         => $this->postData['Settingslink-Setting-type'][$idx],
                    'Description'  => $this->postData['Settingslink-Setting-Description'][$idx]
                        ?? 'DescriptionForOption' . ($idx + 1),
                    'initialValue' => $this->postData['Settingslink-Setting-initialValue'][$idx] ?? '',
                    'sort'         => $idx + 1,
                    'conf'         => 'Y',
                    'source'       => null
                ];
                if (!empty($this->postData['Settingslink-Setting-OptionsSource'][$idx])) {
                    $setting['source'] = $this->postData['Settingslink-Setting-OptionsSource'][$idx];
                }

                if ($setting['type'] === 'radio' || $setting['type'] === 'selectbox') {
                    for ($i = 0; $i < 100; $i++) {
                        $index = 'Install-Adminmenu-Settingslink-Setting-Options-Option-' . $i;
                        if (isset($this->postData[$index])) {
                            $setting['options'] = [];
                            foreach ($this->postData[$index] as $optIdx => $_option) {
                                $j = 'Install-Adminmenu-Settingslink-Setting-Options-Option-value-' . $i;

                                $setting['options'][] = [
                                    'value'  => $this->postData[$j][$optIdx],
                                    'sort'   => $optIdx,
                                    'option' => $_option
                                ];
                            }

                            unset($this->postData[$index]);
                            break;
                        }
                    }
                }
                $this->settings[] = $setting;
            }
        }
        foreach ($this->postData['FrontendLink-Link-Name'] ?? [] as $idx => $frontendLink) {
            $this->frontendLinks[] = [
                'Filename'                     => $this->postData['FrontendLink-Link-Filename'][$idx] ?? null,
                'Name'                         => $this->postData['FrontendLink-Link-Name'][$idx],
                'Template'                     => $this->postData['FrontendLink-Link-Template'][$idx]
                    ?? \strtolower($this->postData['FrontendLink-Link-Name'][$idx]) . '.tpl',
                'FullscreenTemplate'           => $this->postData['FrontendLink-Link-FullscreenTemplate'][$idx] ?? null,
                'VisibleAfterLogin'            => $this->postData['FrontendLink-Link-VisibleAfterLogin'][$idx] ?? 'N',
                'PrintButton'                  => $this->postData['FrontendLink-Link-PrintButton'][$idx] ?? 'N',
                'SSL'                          => $this->postData['FrontendLink-Link-Filename'][$idx] ?? null,
                'LinkGroup'                    => $this->postData['FrontendLink-Link-LinkGroup'][$idx] ?? 'hidden',
                'LinkLanguage_Seo'             => $this->postData['FrontendLink-Link-LinkLanguage-Seo'][$idx]
                    ?? \lcfirst($this->postData['FrontendLink-Link-Name'][$idx]),
                'LinkLanguage_Name'            => $this->postData['FrontendLink-Link-LinkLanguage-Name'][$idx]
                    ?? $this->postData['FrontendLink-Link-Name'][$idx],
                'LinkLanguage_Title'           => $this->postData['FrontendLink-Link-LinkLanguage-Title'][$idx]
                    ?? $this->postData['FrontendLink-Link-Name'][$idx],
                'LinkLanguage_MetaTitle'       => $this->postData['FrontendLink-Link-LinkLanguage-MetaTitle'][$idx]
                    ?? $this->postData['FrontendLink-Link-Name'][$idx],
                'LinkLanguage_MetaKeywords'    => $this->postData['FrontendLink-Link-LinkLanguage-MetaKeywords'][$idx]
                    ?? $this->postData['FrontendLink-Link-Name'][$idx],
                'LinkLanguage_MetaDescription' => $this->postData['FrontendLink-Link-LinkLanguage-MetaDescription'][$idx]
                    ?? $this->postData['FrontendLink-Link-Name'][$idx],
            ];
        }

        foreach ($this->postData['Install-Emailtemplate-Template-Name'] ?? [] as $idx => $mailTPL) {
            $this->mailTemplates[] = [
                'Name'                         => $mailTPL,
                'Description'                  => $this->postData['Install-Emailtemplate-Template-Description'][$idx],
                'Type'                         => $this->postData['Install-Emailtemplate-Template-Type'][$idx],
                'ModulId'                      => $this->postData['Install-Emailtemplate-Template-ModulId'][$idx],
                'Active'                       => $this->postData['Install-Emailtemplate-Template-Active'][$idx],
                'AKZ'                          => $this->postData['Install-Emailtemplate-Template-AKZ'][$idx],
                'AGB'                          => $this->postData['Install-Emailtemplate-Template-AGB'][$idx],
                'WRB'                          => $this->postData['Install-Emailtemplate-Template-WRB'][$idx],
                'nWRBForm'                     => $this->postData['Install-Emailtemplate-Template-nWRBForm'][$idx],
                'TemplateLanguage_Subject'     => $this->postData['Install-Emailtemplate-Template-TemplateLanguage-Subject'][$idx],
                'TemplateLanguage_ContentHtml' => $this->postData['Install-Emailtemplate-Template-TemplateLanguage-ContentHtml'][$idx],
                'TemplateLanguage_ContentText' => $this->postData['Install-Emailtemplate-Template-TemplateLanguage-ContentText'][$idx]
            ];
        }
        if (!empty($this->postData['Install-Adminmenu-Customlink-Name'])
            && !empty($this->postData['Install-Adminmenu-Customlink-Filename'])
            && \count($this->postData['Install-Adminmenu-Customlink-Name']) ===
            \count($this->postData['Install-Adminmenu-Customlink-Filename'])
        ) {
            foreach ($this->postData['Install-Adminmenu-Customlink-Name'] as $idx => $_customLink) {
                $this->adminTabs[] = [
                    'Name'     => $_customLink,
                    'Filename' => $this->postData['Install-Adminmenu-Customlink-Filename'][$idx],
                ];
            }
        }

        $this->hasHooks         = \count($this->hooks) > 0;
        $this->hasJs            = \count($this->jsFiles) > 0;
        $this->hasCss           = \count($this->cssFiles) > 0;
        $this->hasBoxes         = \count($this->boxes) > 0;
        $this->hasLangVars      = \count($this->langVars) > 0;
        $this->hasSettings      = \count($this->settings) > 0;
        $this->hasFrontendLinks = \count($this->frontendLinks) > 0;
        $this->hasMailTemplates = \count($this->mailTemplates) > 0;
        $this->hasCustomLinks   = \count($this->adminTabs) > 0;
        $this->hasWidgets       = \count($this->widgets) > 0;

        $this->pluginDir = \PLUGIN_DIR . $this->pluginID;
        if ($deleteExisting === true && \is_dir(\PFAD_ROOT . $this->pluginDir)) {
            try {
                $this->fs->deleteDirectory(\PLUGIN_DIR . $this->pluginID);
            } catch (Exception) {
                $this->errors[] = \sprintf(\__('Could not delete dir %s.'), \PLUGIN_DIR . $this->pluginID);
            }
        }

        return $this;
    }

    /**
     * creates the info.xml xml tree
     *
     * @return string
     */
    private function getXML(): string
    {
        $info                   = new stdClass();
        $info->name             = $this->name;
        $info->description      = $this->description;
        $info->author           = $this->author;
        $info->url              = $this->url;
        $info->pluginID         = $this->pluginID;
        $info->xmlVersion       = $this->xmlVersion;
        $info->minShopVersion   = $this->minShopVersion;
        $info->maxShopVersion   = $this->maxShopVersion;
        $info->icon             = $this->icon;
        $info->version          = $this->version;
        $info->date             = (new DateTime())->format('Y-m-d');
        $info->flushTags        = $this->flushTags;
        $info->hasSettings      = $this->hasSettings;
        $info->settings         = $this->settings;
        $info->hasCustomLinks   = $this->hasCustomLinks;
        $info->adminTabs        = $this->adminTabs;
        $info->hasLangVars      = $this->hasLangVars;
        $info->langVars         = $this->langVars;
        $info->hasFrontendLinks = $this->hasFrontendLinks;
        $info->frontendLinks    = $this->frontendLinks;
        $info->hasMailTemplates = $this->hasMailTemplates;
        $info->mailTemplates    = $this->mailTemplates;
        $info->hasBoxes         = $this->hasBoxes;
        $info->boxes            = $this->boxes;
        $info->hasWidgets       = $this->hasWidgets;
        $info->widgets          = $this->widgets;
        $info->hasCss           = $this->hasCss;
        $info->cssFiles         = $this->cssFiles;
        $info->hasJs            = $this->hasJs;
        $info->jsFiles          = $this->jsFiles;
        $info->postData         = $this->postData;

        return $this->smarty->assign('info', $info)
            ->fetch($this->plugin->getPaths()->getAdminPath() . 'tpl/infoxml.tpl');
    }

    /**
     * generate list of dirs to be created
     *
     * @return array
     */
    private function getDirList(): array
    {
        $pluginDir = $this->pluginDir;
        $dirList   = [];
        $dirList[] = $pluginDir;
        if ($this->hasCss || $this->hasJs || $this->hasHooks || $this->hasFrontendLinks || $this->hasBoxes) {
            $dirList[] = $pluginDir . '/frontend';
            if ($this->hasCss) {
                $dirList[] = $pluginDir . '/frontend/css';
            }
            if ($this->hasJs) {
                $dirList[] = $pluginDir . '/frontend/js';
            }
            if ($this->hasBoxes) {
                $dirList[] = $pluginDir . '/frontend/boxen';
            }
            foreach ($this->frontendLinks as $_link) {
                if (!empty($_link['FullscreenTemplate']) || !empty($_link['Template'])) {
                    $dirList[] = $pluginDir . '/frontend/template';
                    break;
                }
            }
        }
        if ($this->createLocale) {
            $dirList[] = $pluginDir . '/locale';
            foreach ($this->localizations as $localization) {
                $dirList[] = $pluginDir . '/locale/' . $localization;
            }
        }
        if ($this->hasWidgets) {
            $dirList[] = $pluginDir . '/adminmenu';
            $dirList[] = $pluginDir . '/adminmenu/widget';
            if ($this->createLocale) {
                foreach ($this->localizations as $localization) {
                    $dirList[] = $pluginDir . '/locale/' . $localization . '/widgets';
                }
            }
        }
        if ($this->hasCustomLinks) {
            $dirList[] = $pluginDir . '/adminmenu';
            $dirList[] = $pluginDir . '/adminmenu/templates';
        }
        if (\count($this->tables) > 0) {
            $dirList[] = $pluginDir . '/Migrations';
            if ($this->createModels === true) {
                $dirList[] = $pluginDir . '/Models';
            }
        }

        return \array_unique($dirList);
    }

    /**
     * generate list of files to be created
     *
     * @return array
     */
    private function getFileList(): array
    {
        $baseDir       = $this->pluginDir . '/';
        $this->infoXML = $this->pluginDir . '/info.xml';
        $fileList      = [];

        $fileList[] = [
            'file' => $this->infoXML,
            'type' => 'xml'
        ];
        $fileList[] = [
            'base' => '/Bootstrap.php',
            'file' => $this->pluginDir . '/Bootstrap.php',
            'type' => 'php'
        ];

        foreach ($this->boxes as $box) {
            $fileList[] = [
                'base' => $box['TemplateFile'],
                'file' => $baseDir . 'frontend/boxen/' . $box['TemplateFile'],
                'type' => 'xml'
            ];
        }
        foreach ($this->widgets as $widget) {
            $fileList[] = [
                'class' => $widget['Class'],
                'tpl'   => $widget['TemplateFile'],
                'base'  => $widget['Class'] . '.php',
                'file'  => $baseDir . 'adminmenu/widget/' . $widget['Class'] . '.php',
                'type'  => 'widgetClass'
            ];
            if (!empty($widget['TemplateFile'])) {
                $fileList[] = [
                    'base' => $widget['TemplateFile'],
                    'file' => $baseDir . 'adminmenu/widget/' . $widget['TemplateFile'],
                    'type' => 'tpl'
                ];
            }
            if ($this->createLocale) {
                foreach ($this->localizations as $localization) {
                    $fileList[] = [
                        'base' => $widget['Class'] . '.po',
                        'file' => $baseDir . 'locale/' . $localization . '/widgets/' . $widget['Class'] . '.po',
                        'type' => 'po'
                    ];
                }
            }
        }
        foreach ($this->jsFiles as $jsFile) {
            $fileList[] = [
                'base' => $jsFile['name'],
                'file' => $baseDir . 'frontend/js/' . $jsFile['name'],
                'type' => 'tpl'
            ];
        }
        foreach ($this->cssFiles as $cssFile) {
            $fileList[] = [
                'base' => $cssFile['name'],
                'file' => $baseDir . 'frontend/css/' . $cssFile['name'],
                'type' => 'css'
            ];
        }
        foreach ($this->frontendLinks as $link) {
            if (!empty($link['Filename'])) {
                $fileList[] = [
                    'base' => $link['Filename'],
                    'file' => $baseDir . 'frontend/' . $link['Filename'],
                    'type' => 'php'
                ];
            }
            if (!empty($link['FullscreenTemplate'])) {
                $fileList[] = [
                    'base' => $link['FullscreenTemplate'],
                    'file' => $baseDir . 'frontend/template/' . $link['FullscreenTemplate'],
                    'type' => 'tpl'
                ];
            } elseif (!empty($link['Template'])) {
                $fileList[] = [
                    'base' => $link['Template'],
                    'file' => $baseDir . 'frontend/template/' . $link['Template'],
                    'type' => 'tpl'
                ];
            }
        }
        foreach ($this->adminTabs as $i => $customLink) {
            if (empty($customLink['Filename'])) {
                $customLink['Filename'] = 'tab' . ($i + 1) . '.tpl';
            }
            $fileList[] = [
                'base' => $customLink['Filename'],
                'file' => $baseDir . 'adminmenu/templates/' . $customLink['Filename'],
                'type' => 'backendtpl'
            ];
        }
        if ($this->createLocale) {
            foreach ($this->localizations as $localization) {
                $fileList[] = [
                    'base' => 'base.po',
                    'file' => $baseDir . 'locale/' . $localization . '/base.po',
                    'type' => 'po'
                ];
            }
        }
        $dt = new DateTime();
        foreach ($this->tables as $table) {
            $class      = 'Migration' . $dt->format('YmdHis');
            $fileList[] = [
                'class' => $class,
                'base'  => $class . '.php',
                'file'  => $baseDir . 'Migrations/' . $class . '.php',
                'type'  => 'migration',
                'table' => $table
            ];
            $dt->modify('+1 second');
        }

        return $fileList;
    }

    /**
     * write config xml to info.xml
     *
     * @return bool
     */
    public function writeXML(): bool
    {
        if ($this->debug === true) {
            Shop::dbg($this->infoXML, false, 'write to info.xml:');
        }
        if ($this->infoXML === null) {
            return false;
        }
        try {
            $this->fs->write($this->infoXML, $this->getXML());

            return true;
        } catch (Exception) {
            return false;
        }
    }

    /**
     * @param int $id
     * @return string
     */
    private function getHookNameByID(int $id): string
    {
        foreach ($this->getHookList() as $hook) {
            if ((int)$hook[2] === $id) {
                return $hook[1];
            }
        }

        return '';
    }

    /**
     * @return array
     */
    public function getHookList(): array
    {
        $hookText = $this->fs->read(\PFAD_INCLUDES . 'hooks_inc.php');
        \preg_match_all('/const (.*) = (.*);/', $hookText, $hooks, \PREG_SET_ORDER);

        return $hooks;
    }
}
