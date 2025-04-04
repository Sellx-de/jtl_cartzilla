<?php

declare(strict_types=1);

namespace JTL\Migrations;

use JTL\Update\IMigration;
use JTL\Update\Migration;

/**
 * Class Migration20200421081600
 */
class Migration20200421081600 extends Migration implements IMigration
{
    public function getAuthor(): string
    {
        return 'dr';
    }

    public function getDescription(): string
    {
        return 'Add vimeo consent item';
    }

    /**
     * @inheritdoc
     */
    public function up(): void
    {
        $id = $this->getDB()->getLastInsertedID(
            "INSERT INTO `tconsent`
                (`itemID`, `company`, `pluginID`, `active`)
                VALUES ('vimeo', 'Vimeo', 0, 1)"
        );
        $this->execute(
            'INSERT INTO `tconsentlocalization` 
                (`consentID`,`languageID`,`privacyPolicy`,`description`,`purpose`,`name`)
             VALUES (' . $id . ",1,'https://policies.google.com/privacy?hl=de',
             'Um Inhalte von Vimeo auf dieser Seite zu entsperren, ist Ihre Zustimmung zur Datenweitergabe und
              Speicherung von Drittanbieter-Cookies des Anbieters Vimeo erforderlich.\nDies erlaubt uns,
              unser Angebot sowie das Nutzererlebnis für Sie zu verbessern und interessanter auszugestalten.\nOhne
              Ihre Zustimmung findet keine Datenweitergabe an Vimeo statt, jedoch können die Funktionen von Vimeo
              dann auch nicht auf dieser Seite verwendet werden. ',
             'Einbetten von Videos',
             'Vimeo')
         "
        );
        $this->execute(
            'INSERT INTO `tconsentlocalization` 
                (`consentID`,`languageID`,`privacyPolicy`,`description`,`purpose`,`name`) 
                VALUES (' . $id . ",2,
                'https://google.com/privacy-policy','To view Vimeo contents on this website, you need to consent to the
                transfer of data and storage of third-party cookies by Vimeo..\n\nThis allows us to improve your user
                experience and to make our website better and more interesting.\n\nWithout your consent, no data will
                be transferred to Vimeo. 
                However, you will also not be able to use the Vimdeo services on this website.',
                'Embedding videos',
                'Vimeo'
            );
        "
        );
    }

    /**
     * @inheritdoc
     */
    public function down(): void
    {
        $this->execute("DELETE FROM tconsent WHERE itemID = 'vimeo'");
    }
}
