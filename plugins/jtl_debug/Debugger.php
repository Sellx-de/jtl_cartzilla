<?php

declare(strict_types=1);

namespace Plugin\jtl_debug;

use InvalidArgumentException;
use JsonException;
use JTL\Cache\JTLCacheInterface;
use JTL\DB\DbInterface;
use JTL\Plugin\Data\Config;
use JTL\Plugin\Helper;
use JTL\Plugin\LegacyPluginLoader;
use JTL\Plugin\PluginInterface;
use JTL\Profiler;
use JTL\Smarty\JTLSmarty;
use stdClass;

/**
 * Class Debugger
 * @package Plugin\jtl_debug
 */
class Debugger
{
    /**
     * collection of debug sections
     */
    private array $sections = [];

    /**
     * processing times
     */
    private array $timings = [];

    private PluginInterface $plugin;

    private Util $userDebugger;

    private ?ErrorHandler $errorHandler = null;

    protected array $additional = [];

    private Config $config;

    private DbInterface $db;

    private JTLCacheInterface $cache;

    public function __construct(PluginInterface $plugin, DbInterface $db, JTLCacheInterface $cache)
    {
        $this->plugin = $plugin;
        $this->config = $plugin->getConfig();
        $this->db     = $db;
        $this->cache  = $cache;
    }

    public function getIsActivated(): bool
    {
        $okByQueryParam = $this->config->getValue('jtl_debug_show_on_query_string') === 'N'
            || ($this->config->getValue('jtl_debug_show_on_query_string') === 'Y'
                && isset($_GET[$this->config->getValue('jtl_debug_query_string')]));
        $okByCookie     = $this->config->getValue('jtl_debug_save_cookie') === 'Y'
            && isset($_COOKIE['JTL_DEBUG_ENABLED'])
            && $_COOKIE['JTL_DEBUG_ENABLED'] === '1';

        return $okByQueryParam || $okByCookie;
    }

    public function setErrorHandler(ErrorHandler $handler): self
    {
        if ($this->config->getValue('jtl_debug_show_errors') === 'Y') {
            \set_error_handler([$handler, 'handle'], \E_ALL);
            $this->errorHandler = $handler;
        }

        return $this;
    }

    public function initUserDebugger(Util $util): self
    {
        $this->userDebugger = $util;
        $GLOBALS['dbg']     = $this->userDebugger;

        return $this;
    }

    public function getUserDebugger(): Util
    {
        return $this->userDebugger;
    }

    /**
     * check if array is associative
     *
     * @param array $array
     * @return bool
     */
    private function isAssoc(array $array): bool
    {
        foreach (\array_keys($array) as $k => $v) {
            if ($k !== $v) {
                return true;
            }
        }

        return false;
    }

    /**
     * gather active hooks information
     *
     * @return array
     */
    private function getHooks(): array
    {
        $hooks = [];
        // get some additional information about hooking plugins
        $loader = new LegacyPluginLoader($this->db, $this->cache);
        foreach (Helper::getHookList() as $hookId => $hookArray) {
            foreach ($hookArray as $hookObject) {
                if (!isset($hookObject->kPlugin, $hookObject->cDateiname)) {
                    continue;
                }
                try {
                    $ext = $loader->init((int)$hookObject->kPlugin);
                } catch (InvalidArgumentException $e) {
                    continue;
                }
                $meta                                    = $ext->getMeta();
                $extData                                 = new stdClass();
                $extData->ID                             = $hookObject->kPlugin;
                $extData->Version                        = $hookObject->nVersion;
                $extData->Path                           = $ext->getPaths()->getFrontendPath();
                $extData->Filename                       = $hookObject->cDateiname;
                $extData->Author                         = $meta->getAuthor();
                $extData->InstallDate                    = $meta->getDateInstalled()->format('d.m.Y');
                $extData->Description                    = $meta->getDescription();
                $hooks[$hookId][$hookObject->cDateiname] = $extData;
            }
        }

        return $hooks;
    }

    private function storeOutputAjax(string $json): self
    {
        if ($this->cache->set('jtl_debug_json', $json, [\CACHING_GROUP_PLUGIN, 'jtl_debug']) !== false) {
            return $this;
        }
        $_SESSION['jtl-debug-session'] = $json;

        return $this;
    }

    /**
     * output json for ajax call
     */
    public function getOutputAjax(): void
    {
        $json = $this->cache->get('jtl_debug_json');
        $this->cache->flush('jtl_debug_json');
        if ($json === false && isset($_SESSION['jtl-debug-session'])) {
            $json = $_SESSION['jtl-debug-session'];
        }
        if ($json === false) {
            die('x');
        }
        if (\ob_get_length() > 0) {
            \ob_end_clean();
        }
        \header('Content-type: application/json; charset=utf-8');
        unset($_SESSION['jtl-debug-session']);
        die($json);
    }

    /**
     * transform output to an object that is easy to consume by the javascript frontend
     *
     * @param mixed $node
     * @param mixed $key
     * @param mixed $parent
     * @param bool  $showPath
     * @return array
     */
    private function transform($node, $key, $parent = null, bool $showPath = false): array
    {
        $key  = (string)$key;
        $type = \gettype($node);
        $res  = [
            'type'  => $type,
            'key'   => $key,
            'class' => $type === 'object' ? \get_class($node) : $type
        ];
        if ($res['type'] === 'array' && $this->isAssoc($node)) {
            $res['type'] = 'assoc_array';
        }
        // we don't care what numeric type it is, we just want to know if it is a number
        if (\is_numeric($node)) {
            $res['type'] = 'number';
        }
        $res = $this->buildPath($showPath, $res, $parent, $key);
        if ($res['type'] === 'object' || $res['type'] === 'array' || $res['type'] === 'assoc_array') {
            // build children array recursively
            $res['children'] = [];
            $res['length']   = 0;
            foreach ($node as $k => $value) {
                $k                   = (string)$k;
                $res['children'][$k] = $this->transform($value, $k, $res, $showPath);
                ++$res['length'];
            }
        } else {
            // simple data type
            $res['value'] = $node;
        }

        return $res;
    }

    /**
     * @param bool   $showPath
     * @param array  $res
     * @param mixed  $parent
     * @param string $key
     * @return array
     */
    private function buildPath(bool $showPath, array $res, $parent, string $key): array
    {
        if ($showPath === true && isset($parent['path'], $key)) {
            if ($parent['path'] === '') {
                $res['path'] = '$' . $key;
            } elseif ($parent['type'] === 'array') {
                $res['path'] = $parent['path'] . '[' . $key . ']';
            } elseif ($parent['type'] === 'assoc_array') {
                $res['path'] = $parent['path'] . '.' . $key;
            } elseif ($parent['type'] === 'object') {
                $res['path'] = $parent['path'] . '->' . $key;
            } else {
                $res['path'] = '$' . $key;
            }
        } else {
            $res['path'] = '';
        }

        return $res;
    }

    /**
     * @param array|object|null $input
     * @param string            $name
     * @param bool              $showPath
     * @return $this
     */
    private function addSection($input, string $name, bool $showPath = false): self
    {
        $startTime                         = \microtime(true);
        $this->sections[$name]             = $this->transform($input, '', null, $showPath);
        $this->sections[$name]['type']     = 'section';
        $this->sections[$name]['name']     = $name;
        $this->sections[$name]['showPath'] = $showPath;
        $this->timings[$name]              = \microtime(true) - $startTime;

        return $this;
    }

    private function getSectionsJSON(): string
    {
        try {
            return \json_encode($this->sections, \JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            return '';
        }
    }

    /**
     * @param array $array
     * @param int   $order
     * @return bool
     */
    private function ksortRecursive(array &$array, int $order = \SORT_NATURAL): bool
    {
        foreach ($array as &$value) {
            if (\is_array($value)) {
                $this->ksortRecursive($value, $order);
            }
        }

        return \ksort($array, $order);
    }

    private function setCookie(): bool
    {
        if (
            !isset($_COOKIE['JTL_DEBUG_ENABLED'])
            && $this->config->getValue('jtl_debug_save_cookie') === 'Y'
            && $this->config->getValue('jtl_debug_show_on_query_string') === 'Y'
            && isset($_GET[$this->config->getValue('jtl_debug_query_string')])
        ) {
            $params = \session_get_cookie_params();

            return \setcookie(
                'JTL_DEBUG_ENABLED',
                '1',
                ($params['lifetime'] === 0) ? 0 : \time() + $params['lifetime'],
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }

        return false;
    }

    private function addUserDebugSection(): bool
    {
        if (!\method_exists($this->userDebugger, 'getUserDebug') || \count($this->userDebugger->getUserDebug()) === 0) {
            return false;
        }
        $translation = $this->plugin->getLocalization()->getTranslations();
        $this->addSection($this->userDebugger->getUserDebug(), $translation['section_user_debug']);

        return true;
    }

    private function addGetSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_get') !== 'Y') {
            return false;
        }
        $this->addSection($_GET, '$_GET');

        return true;
    }

    private function addPostSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_post') !== 'Y') {
            return false;
        }
        $this->addSection($_POST, '$_POST');

        return true;
    }

    private function addCookieSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_cookie') !== 'Y') {
            return false;
        }
        $this->addSection($_COOKIE, '$_COOKIE');

        return true;
    }

    /**
     * @thanks to jon @ http://www.php.net/manual/en/function.phpinfo.php
     */
    private function addPhpInfoSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_php_info') !== 'Y') {
            return false;
        }
        \ob_start();
        \phpinfo();
        $phpInfo = ['version' => \PHP_VERSION, 'phpinfo' => []];
        if (
            \preg_match_all(
                '#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?>'
                . '<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>'
                . '(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s',
                \ob_get_clean(),
                $matches,
                \PREG_SET_ORDER
            )
        ) {
            foreach ($matches as $match) {
                if (\strlen($match[1])) {
                    $phpInfo[$match[1]] = [];
                } elseif (isset($match[3])) {
                    if ($match[2] !== 'Directive') {
                        $keys                            = \array_keys($phpInfo);
                        $phpInfo[\end($keys)][$match[2]] = isset($match[4])
                            ? [
                                'global' => \strip_tags($match[3]),
                                'local'  => \strip_tags($match[4])
                            ]
                            : \strip_tags($match[3]);
                    }
                }
            }
        }
        $this->addSection($phpInfo, 'phpinfo()');

        return true;
    }

    private function addSessionSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_session') !== 'Y') {
            return false;
        }
        // really make sure we don't get unwanted recursion
        unset($_SESSION['jtl-debug-session']);
        $this->addSection($_SESSION, '$_SESSION');

        return false;
    }

    private function addSmartyVariablesSection(JTLSmarty $smarty): bool
    {
        if ($this->config->getValue('jtl_debug_show_smarty_vars') !== 'Y') {
            return false;
        }
        $assignedVars = $smarty->getTemplateVars();
        $this->ksortRecursive($assignedVars, \SORT_NATURAL | \SORT_FLAG_CASE);
        $this->addSection(
            $assignedVars,
            $this->plugin->getLocalization()->getTranslations()['section_smarty_variables'],
            true
        );
        unset($assignedVars);

        return false;
    }

    private function addLoadedTemplatesSection(JTLSmarty $smarty): bool
    {
        if ($this->config->getValue('jtl_debug_show_loaded_templates') !== 'Y') {
            return false;
        }
        $translations = $this->plugin->getLocalization()->getTranslations();
        $templates    = [];
        if (!empty($smarty->_debug->template_data)) {
            foreach ($smarty->_debug->template_data as $_idx) {
                foreach ($_idx as $_data) {
                    if (empty($_data['name'])) {
                        continue;
                    }
                    $tplData                   = new stdClass();
                    $tplData->compileTime      = $_data['compile_time'];
                    $tplData->renderTime       = $_data['render_time'];
                    $tplData->cacheTime        = $_data['cache_time'];
                    $tplData->totalTime        = $_data['total_time'];
                    $templates[$_data['name']] = $tplData;
                }
            }
        }
        $this->addSection($templates, $translations['section_loaded_templates'] . ' (' . \count($templates) . ')');
        unset($templates);

        return true;
    }

    private function addErrorLoggingSection(): bool
    {
        if ($this->errorHandler === null || \count($errors = $this->errorHandler->getErrors()) === 0) {
            return false;
        }
        $translations = $this->plugin->getLocalization()->getTranslations();
        // remove duplicate errors
        $errors     = \array_map('\unserialize', \array_unique(\array_map('\serialize', $errors)));
        $errorCount = 0;
        foreach ($errors as $errorFile) {
            foreach ($errorFile as $errorType) {
                $errorCount += \count($errorType);
            }
        }
        $this->addSection($errors, $translations['section_php_errors'] . ' (' . $errorCount . ')');
        unset($this->errors);

        return true;
    }

    private function addCacheSection(): bool
    {
        $cacheOptions = $this->cache->getOptions();
        if (
            $cacheOptions['debug'] === true
            && $cacheOptions['debug_method'] === 'ssd'
            && $this->config->getValue('jtl_debug_show_cache') === 'Y'
        ) {
            $cacheOptions['mysql_pass'] = '******';
            if (\is_string($cacheOptions['redis_pass'])) {
                $cacheOptions['redis_pass'] = '******';
            }
            $cacheDebug            = Profiler::getCurrentCacheProfile();
            $cacheDebug['options'] = $cacheOptions;
            $this->addSection($cacheDebug, 'Cache');

            return true;
        }

        return false;
    }

    private function addNiceDBSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_nicedb_profiler') !== 'Y') {
            return false;
        }
        $this->addSection(Profiler::getCurrentSQLProfile(), 'NiceDB');

        return true;
    }

    private function addHookSection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_hooks') !== 'Y') {
            return false;
        }
        $translations = $this->plugin->getLocalization()->getTranslations();
        $hookCount    = \method_exists(Helper::class, 'getHookList')
            ? \count(Helper::getHookList())
            : \count($GLOBALS['oPluginHookListe_arr'] ?? []);
        $this->addSection($this->getHooks(), $translations['section_registered_hooks'] . ' (' . $hookCount . ')');

        return true;
    }

    private function addProfilerSection(): bool
    {
        if (
            $this->config->getValue('jtl_debug_show_plugin_profiler') !== 'Y'
            || !\method_exists(Profiler::class, 'getCurrentPluginProfile')
        ) {
            return false;
        }
        $pluginDebug = [];
        foreach (Profiler::getCurrentPluginProfile() as $_profile) {
            if (!isset($pluginDebug[$_profile['hookID']])) {
                $pluginDebug[$_profile['hookID']] = [];
            }
            $pluginDebug[$_profile['hookID']][] = $_profile;
        }
        $this->addSection($pluginDebug, 'Plugins');

        return true;
    }

    private function addMemorySection(): bool
    {
        if ($this->config->getValue('jtl_debug_show_mem_usage') !== 'Y') {
            return false;
        }
        $maxMem = \number_format(\memory_get_peak_usage(true) / 1024 / 1024, 2, ',', '');
        $this->addSection(null, 'Mem: ' . $maxMem . ' MB');

        return true;
    }

    private function addSections(JTLSmarty $smarty): void
    {
        $this->setCookie();
        $this->addUserDebugSection();
        $this->addSmartyVariablesSection($smarty);
        $this->addLoadedTemplatesSection($smarty);
        $this->addErrorLoggingSection();
        $this->addSessionSection();
        $this->addGetSection();
        $this->addPostSection();
        $this->addCookieSection();
        $this->addPhpInfoSection();
        $this->addHookSection();
        $this->addCacheSection();
        $this->addNiceDBSection();
        $this->addProfilerSection();
        $this->addMemorySection();
    }

    public function run(JTLSmarty $smarty): self
    {
        $this->addSections($smarty);
        $this->storeOutputAjax($this->getSectionsJSON());

        return $this;
    }
}
