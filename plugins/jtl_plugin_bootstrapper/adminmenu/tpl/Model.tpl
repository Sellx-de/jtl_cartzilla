<?php declare(strict_types=1);

namespace Plugin\{$pluginID}\Models;

use DateTime;
use Exception;
use JTL\Model\DataAttribute;
use JTL\Model\DataModel;

/**
 * Class {$modelName}
 * @package Plugin\{$pluginID}\Models
{foreach $tableDesc as $attribute}
 * @property {$attribute->phpType} ${$attribute->phpName}
 * @method {$attribute->phpType} get{$attribute->phpName|capitalize}()
 * @method void set{$attribute->phpName|capitalize}({$attribute->phpType} $value)
{/foreach}
 */
final class {$modelName} extends DataModel
{
    /**
     * @inheritdoc
     */
    public function getTableName(): string
    {
        return '{$tableName}';
    }

    /**
     * Setting of keyname is not supported!
     * Call will always throw an Exception with code ERR_DATABASE!
     * @inheritdoc
     */
    public function setKeyName($keyName): void
    {
        throw new Exception(__METHOD__ . ': setting of keyname is not supported', self::ERR_DATABASE);
    }

    /**
     * @inheritdoc
     */
    protected function onRegisterHandlers(): void
    {
        parent::onRegisterHandlers();
{foreach $tableDesc as $attribute}
{if $attribute->dataType === 'datetime'}
        $this->registerGetter({$attribute->name}, static function ($value, $default) {
            return ModelHelper::fromStrToDateTime($value, $default);
        });
        $this->registerSetter({$attribute->name}, static function ($value) {
            return ModelHelper::fromDateTimeToStr($value);
        });
{/if}
{if $attribute->dataType === 'date'}
        $this->registerGetter({$attribute->name}, static function ($value, $default) {
            return ModelHelper::fromStrToDate($value, $default);
        });
        $this->registerSetter({$attribute->name}, static function ($value) {
            return ModelHelper::fromDateToStr($value);
        });
{/if}
{if $attribute->dataType === 'time'}
        $this->registerGetter({$attribute->name}, static function ($value, $default) {
            return ModelHelper::fromStrToTime($value, $default);
        });
        $this->registerSetter({$attribute->name}, static function ($value) {
            return ModelHelper::fromTimeToStr($value);
        });
{/if}
{if $attribute->dataType === 'timestamp'}
        $this->registerGetter({$attribute->name}, static function ($value, $default) {
            return ModelHelper::fromStrToTimestamp($value, $default);
        });
        $this->registerSetter({$attribute->name}, static function ($value) {
            return ModelHelper::fromTimestampToStr($value);
        });
{/if}
{/foreach}
    }

    /**
    * @inheritdoc
    */
    public function getAttributes(): array
    {
        static $attributes = null;
        if ($attributes === null) {
            $attributes   = [];
{foreach $tableDesc as $attribute}
            $attributes[{$attribute->name}] = DataAttribute::create({$attribute->name}, {$attribute->dataType}, {$attribute->default}, {$attribute->nullable}, {$attribute->isPrimaryKey});
{/foreach}
        }

        return $attributes;
    }
}
