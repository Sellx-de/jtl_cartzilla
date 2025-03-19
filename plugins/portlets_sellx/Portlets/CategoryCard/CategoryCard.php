<?php declare(strict_types=1);

namespace Plugin\portlets_sellx\Portlets\CategoryCard;

use JTL\OPC\Portlet;
use JTL\OPC\PortletInstance;
use JTL\Catalog\Category\Kategorie;
use JTL\Catalog\Product\Artikel;
use JTL\Shop;

class CategoryCard extends Portlet
{

    public function getFinalHtml(PortletInstance $instance, bool $inContainer = true): string
    {
        $smarty = Shop::Smarty();
        $db = Shop::Container()->getDB();

        // 🔹 3 Kategorien mit dem Attribut "start_cat_1 = 1" abrufen
        $kategorien = $db->query(
            "SELECT kKategorie FROM tkategorieattribut WHERE cName = 'start_cat_1' AND cWert = '1' LIMIT 3",
            2
        );
        
        $kategorienMitProdukten = [];

        foreach ($kategorien as $kat) {
            $kategorie = new Kategorie((int) $kat->kKategorie);

            if ($kategorie->getID() > 0) {
                // 🔹 5 Produkte aus dieser Kategorie laden
                $produkte = $this->getProductsByCategory($kategorie->getID(), 5);

                $kategorienMitProdukten[] = [
                    'kKategorieID' => $kategorie->getID(),
                    'cName' => $kategorie->getName(),
                    'cURL' => $kategorie->getURL(),
                    'produkte' => $produkte
                ];
            }
        }

        // 🔹 Kategorien & Produkte an Smarty übergeben
        $smarty->assign('kategorienMitProdukten', $kategorienMitProdukten);

        return $smarty->fetch('plugins/portlets_sellx/Portlets/CategoryCard/CategoryCard.tpl');
    }
    public function getButtonHtml(): string
    {
        return $this->getFontAwesomeButtonHtml('far fa-square');
    }
    private function getProductsByCategory(int $kategorieID, int $anzahl): array
    {
        $db = Shop::Container()->getDB();
        $produkte = [];

        // 🔹 Alle Unterkategorien (rekursiv) abrufen
        $kategorieIDs = $this->getAllSubcategories($kategorieID);
        $kategorieIDs[] = $kategorieID; // Hauptkategorie hinzufügen
        $kategorieIDString = implode(',', array_unique($kategorieIDs));

        // 🔹 Zufällige Produkte aus diesen Kategorien abrufen
        $produktIDs = $db->query(
            "SELECT DISTINCT kArtikel FROM tkategorieartikel
         WHERE kKategorie IN ($kategorieIDString) 
         ORDER BY RAND() 
         LIMIT " . (int) $anzahl,
            2
        );

        // 🔹 Debugging: SQL-Abfrage testen
        $sqlQuery = "SELECT DISTINCT kArtikel FROM tkategorieartikel
                 WHERE kKategorie IN ($kategorieIDString) 
                 ORDER BY RAND() 
                 LIMIT " . (int) $anzahl;

        foreach ($produktIDs as $id) {
            $artikel = new Artikel();
            $artikel->fuelleArtikel((int) $id->kArtikel, Artikel::getDefaultOptions());

            if ($artikel->kArtikel > 0) {
                $produkte[] = $artikel;
            } else {
                file_put_contents(PFAD_ROOT . 'jtldebug.log', "❌ Fehler beim Laden von Artikel-ID: " . $id->kArtikel . "\n", FILE_APPEND);
            }
        }


        // 🔹 Falls zu wenige Produkte gefunden wurden, Dummy-Produkte ergänzen
        $fehlendeProdukte = $anzahl - count($produkte);
        for ($i = 1; $i <= $fehlendeProdukte; $i++) {
            $produkte[] = (object) [
                'cName' => "Platzhalter-Produkt {$i}",
                'cURL' => "#",
                'Bilder' => [(object) ['cURLNormal' => 'https://place-hold.it/300']],
                'Preise' => (object) ['fVKBrutto' => 0.00]
            ];
        }

        return $produkte;
    }

    private function getAllSubcategories(int $kategorieID): array
    {
        $db = Shop::Container()->getDB();
        $unterkategorien = [];

        $result = $db->query(
            "SELECT kKategorie FROM tkategorie WHERE kOberKategorie = " . (int) $kategorieID,
            2
        );

        foreach ($result as $row) {
            $unterkategorien[] = (int) $row->kKategorie;
            // 🔹 Rufe rekursiv alle weiteren Unterkategorien auf
            $unterkategorien = array_merge($unterkategorien, $this->getAllSubcategories((int) $row->kKategorie));
        }

        return $unterkategorien;
    }
}
