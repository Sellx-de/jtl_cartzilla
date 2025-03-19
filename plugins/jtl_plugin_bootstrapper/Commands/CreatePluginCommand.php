<?php declare(strict_types=1);

namespace Plugin\jtl_plugin_bootstrapper\Commands;

use JTL\Console\Command\Command;
use JTL\Plugin\Admin\InputType;
use JTL\Plugin\Helper;
use JTL\Shop;
use Plugin\jtl_plugin_bootstrapper\PluginBootstrapper;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CreatePluginCommand
 * @package Plugin\jtl_plugin_bootstrapper\Commands
 */
class CreatePluginCommand extends Command
{
    private const OPT_NAME             = 'name';
    private const OPT_VERSION          = 'plugin-version';
    private const OPT_DESCRIPTION      = 'description';
    private const OPT_AUTHOR           = 'author';
    private const OPT_URL              = 'url';
    private const OPT_ID               = 'id';
    private const OPT_FLUSH_TAGS       = 'flush-tags';
    private const OPT_MIN_SHOP_VERSION = 'minshopversion';
    private const OPT_MAX_SHOP_VERSION = 'maxshopversion';
    private const OPT_CREATE_TABLES    = 'create-migrations';
    private const OPT_CREATE_MODELS    = 'create-models';
    private const OPT_HOOKS            = 'hooks';
    private const OPT_JS               = 'js';
    private const OPT_CSS              = 'css';
    private const OPT_DELETE           = 'delete';
    private const OPT_LINKS            = 'links';
    private const OPT_SETTINGS         = 'settings';
    private const OPT_SETTINGS_TYPES   = 'settingstypes';

    /**
     * @inheritdoc
     */
    protected function configure(): void
    {
        $opt = InputOption::VALUE_OPTIONAL;
        $req = InputOption::VALUE_REQUIRED;

        $this->setName('create-plugin')
            ->setDescription('Create new plugin')
            ->setDefinition(
                new InputDefinition([
                    new InputOption(self::OPT_NAME, null, $req, 'Name of the plugin'),
                    new InputOption(self::OPT_VERSION, null, $req, 'Version of the plugin (SemVer)'),
                    new InputOption(self::OPT_DESCRIPTION, 'd', $req, 'Descriptive text'),
                    new InputOption(self::OPT_AUTHOR, 'a', $req, 'Author (your name)'),
                    new InputOption(self::OPT_URL, 'u', $req, 'URL to information page'),
                    new InputOption(self::OPT_ID, 'i', $req, 'ID of the plugin'),
                    new InputOption(
                        self::OPT_FLUSH_TAGS,
                        'f',
                        $opt,
                        'List of tags to flush after installation (comma separated)'
                    ),
                    new InputOption(self::OPT_MIN_SHOP_VERSION, null, $opt, 'Minimum shop version (SemVer)'),
                    new InputOption(self::OPT_MAX_SHOP_VERSION, null, $opt, 'Maximum shop version (SemVer)'),
                    new InputOption(
                        self::OPT_CREATE_TABLES,
                        null,
                        $opt,
                        'Create migrations for pre-existing tables (comma separated)'
                    ),
                    new InputOption(self::OPT_CREATE_MODELS, null, $opt, 'Create models (Yes/No)?'),
                    new InputOption(self::OPT_HOOKS, null, $opt, 'Hooks to use (comma separated, numeric)'),
                    new InputOption(self::OPT_JS, 'j', $opt, 'JS files to create (comma separated)'),
                    new InputOption(self::OPT_CSS, 'c', $opt, 'CSS files to create (comma separated)'),
                    new InputOption(self::OPT_DELETE, null, $opt, 'Delete existing plugin (Yes/No)?'),
                    new InputOption(self::OPT_LINKS, null, $opt, 'Frontend links to create (comma separated)'),
                    new InputOption(self::OPT_SETTINGS, null, $opt, 'Settings to create (comma separated)'),
                    new InputOption(self::OPT_SETTINGS_TYPES, null, $opt, 'Settings types to create (comma separated)'),
                ])
            );
    }

    /**
     * @inheritDoc
     */
    protected function interact(InputInterface $input, OutputInterface $output): void
    {
        $name           = $input->getOption(self::OPT_NAME);
        $version        = $input->getOption(self::OPT_VERSION);
        $author         = $input->getOption(self::OPT_AUTHOR);
        $description    = $input->getOption(self::OPT_DESCRIPTION);
        $url            = $input->getOption(self::OPT_URL);
        $id             = $input->getOption(self::OPT_ID);
        $flushTags      = $input->getOption(self::OPT_FLUSH_TAGS);
        $minShopVersion = $input->getOption(self::OPT_MIN_SHOP_VERSION);
        $maxShopVersion = $input->getOption(self::OPT_MAX_SHOP_VERSION);
        $createTables   = $input->getOption(self::OPT_CREATE_TABLES);
        $createModels   = $input->getOption(self::OPT_CREATE_MODELS);
        $hooks          = $input->getOption(self::OPT_HOOKS);
        $js             = $input->getOption(self::OPT_JS);
        $css            = $input->getOption(self::OPT_CSS);
        $delete         = $input->getOption(self::OPT_DELETE);

        while ($name === null || \strlen($name) < 3) {
            $name = $this->getIO()->ask(\__('Plugin name'));
        }
        $input->setOption(self::OPT_NAME, $name);
        while ($version === null || \strlen($version) < 3) {
            $version = $this->getIO()->ask(\__('Version'), '1.0.0');
        }
        $input->setOption(self::OPT_VERSION, $version);
        while ($author === null || \strlen($author) < 2) {
            $author = $this->getIO()->ask(\__('Author'));
            $input->setOption('author', $author);
        }
        while ($description === null || \strlen($description) < 2) {
            $description = $this->getIO()->ask(\__('Description'));
            $input->setOption('description', $description);
        }
        while ($url === null || \strlen($url) < 3) {
            $url = $this->getIO()->ask(\__('URL'));
        }
        $input->setOption(self::OPT_URL, $url);
        while ($id === null || \strlen($id) < 3 || \str_contains($id, '/')) {
            $id = $this->getIO()->ask(\__('ID'));
        }
        $input->setOption(self::OPT_ID, $id);
        $input->setOption(self::OPT_FLUSH_TAGS, $flushTags);

        $linkNames = $input->getOption(self::OPT_LINKS);
        if ($linkNames === null) {
            $moreLInks = null;
            $linkNames = [];
            while ($moreLInks === null || $moreLInks === \__('Yes')) {
                $text      = \count($linkNames) > 0 ? 'Add another link?' : 'Add link?';
                $moreLInks = $this->getIO()->choice(\__($text), [\__('Yes'), \__('No')], 1);
                if ($moreLInks === \__('Yes')) {
                    $linkNames[] = $this->getIO()->ask(\__('Slug'));
                }
            }
        } else {
            $linkNames = \explode(',', $linkNames);
        }
        $input->setOption(self::OPT_LINKS, \implode(',', $linkNames));

        $settingNames = $input->getOption(self::OPT_SETTINGS);
        $settingTypes = $input->getOption(self::OPT_SETTINGS_TYPES);
        if ($settingNames === null) {
            $moreSettings = null;
            $settingNames = [];
            $settingTypes = [];
            while ($moreSettings === null || $moreSettings === \__('Yes')) {
                $text         = \count($settingNames) > 0 ? 'Add another setting?' : 'Add setting?';
                $moreSettings = $this->getIO()->choice(\__($text), [\__('Yes'), \__('No')], 1);
                if ($moreSettings === \__('Yes')) {
                    $settingNames[] = $this->getIO()->ask(\__('Name'));
                    $settingTypes[] = $this->getIO()->choice(
                        \__('Type'),
                        [InputType::TEXT, InputType::TEXTAREA, InputType::SELECT, InputType::CHECKBOX,
                         InputType::RADIO, InputType::COLORPICKER, InputType::EMAIL, InputType::DATE,
                         InputType::TIME, InputType::TEL, InputType::URL, InputType::NONE
                        ],
                        0
                    );
                }
            }
        } else {
            $settingNames = \explode(',', $settingNames);
            $settingTypes = \explode(',', $settingTypes);
        }
        $input->setOption(self::OPT_SETTINGS, \implode(',', $settingNames));
        $input->setOption(self::OPT_SETTINGS_TYPES, \implode(',', $settingTypes));

        if ($createTables === null) {
            $createTables = $this->getIO()->ask(\__('Create migrations for tables (comma separated)?'));
            $input->setOption(self::OPT_CREATE_TABLES, $createTables);
        }

        if ($createModels === null) {
            $createModels = $this->getIO()->choice(\__('Create models?'), [\__('Yes'), \__('No')], 1);
            $input->setOption(self::OPT_CREATE_MODELS, $createModels);
        }

        while ($minShopVersion === null || \strlen($minShopVersion) < 3) {
            $minShopVersion = $this->getIO()->ask(\__('Minimum shop version'), '5.0.0');
        }
        $input->setOption(self::OPT_MIN_SHOP_VERSION, $minShopVersion);
        if ($maxShopVersion === null) {
            $maxShopVersion = $this->getIO()->ask(\__('Maximum shop version'));
        }
        $input->setOption(self::OPT_MAX_SHOP_VERSION, $maxShopVersion);

        if ($hooks === null) {
            $hooks = $this->getIO()->ask(\__('Hooks to use (numbers only, comma separated)'));
        }
        $input->setOption(self::OPT_HOOKS, $hooks);

        if ($js === null) {
            $js = $this->getIO()->ask(\__('JavaScript files to create (comma separated)'));
        }
        $input->setOption(self::OPT_JS, $js);

        if ($css === null) {
            $css = $this->getIO()->ask(\__('CSS files to create (comma separated)'));
        }
        $input->setOption(self::OPT_CSS, $css);
        if ($delete === null && \is_dir(\PFAD_ROOT . \PLUGIN_DIR . $id)) {
            $delete = $this->getIO()->choice(\__('Delete existing plugin?'), [\__('Yes'), \__('No')], 1);
            $input->setOption(self::OPT_DELETE, $delete);
        }
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io             = $this->getIO();
        $verbose        = $input->getOption('verbose');
        $name           = $input->getOption(self::OPT_NAME);
        $version        = $input->getOption(self::OPT_VERSION);
        $description    = $input->getOption(self::OPT_DESCRIPTION);
        $author         = $input->getOption(self::OPT_AUTHOR);
        $url            = $input->getOption(self::OPT_URL);
        $id             = $input->getOption(self::OPT_ID);
        $flushTags      = $input->getOption(self::OPT_FLUSH_TAGS);
        $minShopVersion = $input->getOption(self::OPT_MIN_SHOP_VERSION);
        $maxShopVersion = $input->getOption(self::OPT_MAX_SHOP_VERSION);
        $createTables   = $input->getOption(self::OPT_CREATE_TABLES);
        $createModels   = $input->getOption(self::OPT_CREATE_MODELS);
        $hooks          = $input->getOption(self::OPT_HOOKS);
        $js             = $input->getOption(self::OPT_JS);
        $css            = $input->getOption(self::OPT_CSS);
        $links          = $input->getOption(self::OPT_LINKS);
        $settings       = $input->getOption(self::OPT_SETTINGS);
        $settingsTypes  = $input->getOption(self::OPT_SETTINGS_TYPES);
        $delete         = \strtoupper($input->getOption(self::OPT_DELETE) ?? 'No') === 'YES';
        $cssPriorities  = [];
        $jsPriorities   = [];
        if ($hooks !== null && \strlen($hooks) > 1) {
            $hooks = \array_map('\intval', \array_map('\trim', \explode(',', $hooks)));
        }
        if ($js !== null && \strlen($js) > 4) {
            $js           = \array_map('\trim', \explode(',', $js));
            $jsPriorities = \array_fill(0, \count($js), 5);
        }
        if ($css !== null && \strlen($css) > 4) {
            $css           = \array_map('\trim', \explode(',', $css));
            $cssPriorities = \array_fill(0, \count($css), 5);
        }
        $settingsValues = [];
        if ($settings !== null && \strlen($settings) > 4) {
            $settings      = \array_map('\trim', \explode(',', $settings));
            $settingsTypes = \array_map('\trim', \explode(',', $settingsTypes));
            if (\count($settings) !== \count($settingsTypes)) {
                $io->error('Settings type count does not match settings count.');

                return self::FAILURE;
            }
            foreach ($settings as $setting) {
                $settingsValues[] = \strtolower(\str_replace(' ', '_', $setting));
            }
        }
        $links = $links !== null && \strlen($links) > 1
            ? \array_map('\trim', \explode(',', $links))
            : [];
        $data  = [
            'Name'                           => $name,
            'Version'                        => $version,
            'Description'                    => $description,
            'Author'                         => $author,
            'URL'                            => $url,
            'PluginID'                       => $id,
            'FlushTags'                      => $flushTags,
            'ShopVersion'                    => $minShopVersion,
            'MaxShopVersion'                 => $maxShopVersion,
            'create-table'                   => $createTables ?? '',
            'Install-Hooks-Hook-ID'          => $hooks,
            'createModels'                   => $createModels === 'Yes' || $createModels === 'Ja' ? 'on' : null,
            'Install-CSS-file-name'          => $css,
            'Install-CSS-file-priority'      => $cssPriorities,
            'Install-JS-file-name'           => $js,
            'Install-JS-file-priority'       => $jsPriorities,
            'FrontendLink-Link-Name'         => $links,
            'Settingslink-Setting-Name'      => $settings,
            'Settingslink-Setting-ValueName' => $settingsValues,
            'Settingslink-Setting-type'      => $settingsTypes,
        ];
        $bs    = new PluginBootstrapper(
            Helper::getPluginById('jtl_plugin_bootstrapper'),
            Shop::Smarty(),
            Shop::Container()->getDB(),
            $verbose
        );
        $resp  = $bs->bootstrap($data, $delete)->create()->getResponse();
        if (!isset($resp['errors']) || \count($resp['errors']) > 0) {
            foreach ($resp['errors'] ?? [] as $error) {
                $io->error($error);
            }

            return self::FAILURE;
        }
        foreach ($resp['files'] as $file) {
            $io->writeln(\sprintf(\__('Created file %s'), $file['file']));
        }
        $io->success(\sprintf(\__('Successfully created plugin %s in %s.'), $resp['plugin'], $resp['plugindir']));

        return self::SUCCESS;
    }
}
