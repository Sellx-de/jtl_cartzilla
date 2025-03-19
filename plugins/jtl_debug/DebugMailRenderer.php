<?php

declare(strict_types=1);

namespace Plugin\jtl_debug;

use JTL\Mail\Renderer\SmartyRenderer;

/**
 * Class DebugMailRenderer
 * @package Plugin\jtl_debug
 */
class DebugMailRenderer extends SmartyRenderer
{
    /**
     * @inheritdoc
     */
    public function renderHTML(string $id): string
    {
        return parent::renderHTML($id)
            . '<h3>' . \__('Variablen') . '</h3><pre>'
            . \print_r($this->getSmarty()->getTemplateVars(), true)
            . '</pre>';
    }

    /**
     * @inheritDoc
     */
    public function renderText(string $id): string
    {
        return parent::renderText($id)
            . "\n" . \__('Variablen') . "\n"
            . \print_r($this->getSmarty()->getTemplateVars(), true);
    }
}
