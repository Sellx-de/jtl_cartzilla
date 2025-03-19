<?php declare(strict_types=1);

namespace Plugin\{$pluginID};

use JTL\Widgets\AbstractWidget;

/**
 * Class {$widgetClass}
 * @package Plugin\{$pluginID}
 */
class {$widgetClass} extends AbstractWidget
{
    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $this->getSmarty()->assign('my_template_var', 'Example!');
    }

    /**
     * @inheritDoc
     */
    public function getContent()
    {
        return $this->getSmarty()->fetch(__DIR__ . '/{$widgetTemplateFile}');
    }
}
