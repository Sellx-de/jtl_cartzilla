<?php

declare(strict_types=1);

namespace JTL\REST\Models;

use DateTime;
use Exception;
use JTL\Model\DataAttribute;
use JTL\Model\DataModel;
use JTL\Model\ModelHelper;

/**
 * Class PaymentsModel
 * @OA\Schema(
 *     title="Payments model",
 *     description="Payments model",
 * )
 * @package JTL\REST\Models
 * @property int      $kZahlungseingang
 * @method int getKZahlungseingang()
 * @method void setKZahlungseingang(int $value)
 * @property int      $kBestellung
 * @method int getKBestellung()
 * @method void setKBestellung(int $value)
 * @property string   $cZahlungsanbieter
 * @method string getCZahlungsanbieter()
 * @method void setCZahlungsanbieter(string $value)
 * @property float    $fBetrag
 * @method float getFBetrag()
 * @method void setFBetrag(float $value)
 * @property float    $fZahlungsgebuehr
 * @method float getFZahlungsgebuehr()
 * @method void setFZahlungsgebuehr(float $value)
 * @property string   $cISO
 * @method string getCISO()
 * @method void setCISO(string $value)
 * @property string   $cEmpfaenger
 * @method string getCEmpfaenger()
 * @method void setCEmpfaenger(string $value)
 * @property string   $cZahler
 * @method string getCZahler()
 * @method void setCZahler(string $value)
 * @property DateTime $dZeit
 * @method DateTime getDZeit()
 * @method void setDZeit(DateTime $value)
 * @property string   $cHinweis
 * @method string getCHinweis()
 * @method void setCHinweis(string $value)
 * @property string   $cAbgeholt
 * @method string getCAbgeholt()
 * @method void setCAbgeholt(string $value)
 */
final class PaymentsModel extends DataModel
{
    /**
     * @OA\Property(
     *   property="id",
     *   type="integer",
     *   example=1,
     *   description="The incoming payment ID"
     * )
     * @OA\Property(
     *   property="orderID",
     *   type="integer",
     *   example=1,
     *   description="The order ID"
     * )
     * @OA\Property(
     *   property="paymentProvider",
     *   type="string",
     *   example="PayPal",
     *   description="The payment provider name"
     * )
     * @OA\Property(
     *   property="sum",
     *   type="number",
     *   format="float",
     *   example=123.45,
     *   description="The total payment sum"
     * )
     * @OA\Property(
     *   property="fee",
     *   type="number",
     *   format="float",
     *   example=123.45,
     *   description="The total payment sum"
     * )
     * @OA\Property(
     *   property="currencyCode",
     *   type="string",
     *   example="EUR",
     *   description="The currency code"
     * )
     * @OA\Property(
     *   property="recipient",
     *   type="string",
     *   example="",
     *   description="The payment recipient"
     * )
     * @OA\Property(
     *   property="benefactor",
     *   type="string",
     *   example="sb-vmy494958278@personal.example.com",
     *   description="The payment benefactor"
     * )
     * @OA\Property(
     *     property="date",
     *     example="2022-09-22 18:31:45",
     *     format="datetime",
     *     description="Time of payment",
     *     title="Time of payment",
     *     type="string"
     * )
     * @OA\Property(
     *   property="note",
     *   type="string",
     *   example="",
     *   description="Notices about the transaction"
     * )
     * @OA\Property(
     *   property="fetched",
     *   type="string",
     *   example="N",
     *   description="Fetched by Wawi"
     * )
     */

    /**
     * @inheritdoc
     */
    public function getTableName(): string
    {
        return 'tzahlungseingang';
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
        $this->registerGetter('dZeit', static function ($value, $default) {
            return ModelHelper::fromStrToDateTime($value, $default);
        });
        $this->registerSetter('dZeit', static function ($value) {
            return ModelHelper::fromDateTimeToStr($value);
        });
    }

    /**
     * @inheritdoc
     */
    public function getAttributes(): array
    {
        static $attributes = null;
        if ($attributes !== null) {
            return $attributes;
        }
        $attributes                    = [];
        $attributes['id']              = DataAttribute::create('kZahlungseingang', 'int', null, false, true);
        $attributes['orderID']         = DataAttribute::create('kBestellung', 'int');
        $attributes['paymentProvider'] = DataAttribute::create(
            'cZahlungsanbieter',
            'varchar',
            self::cast('', 'varchar'),
            false
        );
        $attributes['sum']             = DataAttribute::create('fBetrag', 'double');
        $attributes['fee']             = DataAttribute::create('fZahlungsgebuehr', 'double');
        $attributes['currencyCode']    = DataAttribute::create('cISO', 'varchar', null, false);
        $attributes['recipient']       = DataAttribute::create('cEmpfaenger', 'varchar');
        $attributes['benefactor']      = DataAttribute::create('cZahler', 'varchar');
        $attributes['date']            = DataAttribute::create('dZeit', 'datetime');
        $attributes['note']            = DataAttribute::create('cHinweis', 'varchar', null, false);
        $attributes['fetched']         = DataAttribute::create('cAbgeholt', 'char', self::cast('N', 'char'), false);

        return $attributes;
    }
}
