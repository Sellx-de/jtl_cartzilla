<?php declare(strict_types=1);
/**
 * @package Plugin\{$pluginID}\Migrations
 * @author  {$author}
 */

namespace Plugin\{$pluginID}\Migrations;

use JTL\Plugin\Migration;
use JTL\Update\IMigration;

/**
 * Class {$class}
 * @package Plugin\{$pluginID}\Migrations
 */
class {$class} extends Migration implements IMigration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute('{$createTableStatement}');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->execute('{$dropTableStatement}');
    }
}
