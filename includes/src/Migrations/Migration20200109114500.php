<?php

/**
 * Add missing linkgroup box names
 *
 * @author mh
 * @created Thu, 9 Jan 2020 11:45:00 +0200
 */

declare(strict_types=1);

namespace JTL\Migrations;

use JTL\Update\IMigration;
use JTL\Update\Migration;

/**
 * Class Migration20200109114500
 */
class Migration20200109114500 extends Migration implements IMigration
{
    public function getAuthor(): string
    {
        return 'mh';
    }

    public function getDescription(): string
    {
        return 'Add missing linkgroup box names';
    }

    /**
     * @inheritdoc
     */
    public function up(): void
    {
        $this->execute(
            "INSERT INTO tboxsprache (kBox, cISO, cTitel, cInhalt)
                SELECT tboxen.kBox, tlinkgruppesprache.cISOSprache, tlinkgruppesprache.cName, ''
                    FROM tboxen
                    INNER JOIN tlinkgruppesprache
                        ON tlinkgruppesprache.kLinkgruppe = tboxen.kCustomID
                    LEFT JOIN tboxsprache
                        ON tboxsprache.kBox = tboxen.kBox
                        AND tboxsprache.cISO = tlinkgruppesprache.cISOSprache
                    INNER JOIN tsprache ON tsprache.cISO = tlinkgruppesprache.cISOSprache
                    WHERE kCustomID > 0
                        AND tboxsprache.kBoxSprache IS NULL;"
        );
    }

    /**
     * @inheritdoc
     */
    public function down(): void
    {
    }
}
