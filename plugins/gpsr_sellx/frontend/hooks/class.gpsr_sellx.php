<?php

namespace Plugin\gpsr_sellx\Hooks;

use JTL\Shop;
use JTL\Smarty\JTLSmarty;
use JTL\Plugin\PluginInterface;

class ManufacturerInfo
{
    public function execute($args)
    {
        global $smarty, $oArtikel;

        if (!isset($oArtikel) || !$oArtikel->kArtikel) {
            return;
        }

        // Funktionsattribute auslesen
        $attributeKeys = [
            'gpsr_manufacturer_name',
            'gpsr_manufacturer_street',
            'gpsr_manufacturer_housenumber',
            'gpsr_manufacturer_city',
            'gpsr_manufacturer_postalcode',
            'gpsr_manufacturer_country',
            'gpsr_manufacturer_state',
            'gpsr_manufacturer_email',
            'gpsr_manufacturer_homepage'
        ];

        $manufacturerData = [];
        foreach ($attributeKeys as $key) {
            $manufacturerData[$key] = $oArtikel->FunktionsAttribute[$key] ?? '';
        }

        // Smarty-Variable setzen
        $smarty->assign('gpsrManufacturerData', $manufacturerData);

        // Plugin-Objekt über Hook-Parameter holen
        /** @var PluginInterface $plugin */
        $plugin = $args['plugin'];
        if ($plugin !== null) {
            $tplPath = $plugin->getPaths()->getBaseURL() . 'template/gpsr_sellx.tpl';
            $args['out'] .= $smarty->fetch($tplPath);
        }
    }
}