<?php

declare(strict_types=1);

namespace JTL\Cart;

use JTL\Helpers\GeneralObject;
use JTL\Shop;

/**
 * Class PersistentCartItemProperty
 * @package JTL\Cart
 */
class PersistentCartItemProperty
{
    /**
     * @var int
     */
    public $kWarenkorbPersPosEigenschaft;

    /**
     * @var int
     */
    public $kWarenkorbPersPos;

    /**
     * @var int
     */
    public $kEigenschaft;

    /**
     * @var int
     */
    public $kEigenschaftWert;

    /**
     * @var string
     */
    public $cFreifeldWert;

    /**
     * @var string
     */
    public $cEigenschaftName;

    /**
     * @var string
     */
    public $cEigenschaftWertName;

    /**
     * PersistentCartItemProperty constructor.
     * @param int         $propertyID
     * @param int         $propertyValueID
     * @param string|null $freeText
     * @param string|null $propertyName
     * @param string|null $propertyValueName
     * @param int         $kWarenkorbPersPos
     */
    public function __construct(
        int $propertyID,
        int $propertyValueID,
        ?string $freeText,
        ?string $propertyName,
        ?string $propertyValueName,
        int $kWarenkorbPersPos
    ) {
        $this->kWarenkorbPersPos    = $kWarenkorbPersPos;
        $this->kEigenschaft         = $propertyID;
        $this->kEigenschaftWert     = $propertyValueID;
        $this->cFreifeldWert        = $freeText;
        $this->cEigenschaftName     = $propertyName;
        $this->cEigenschaftWertName = $propertyValueName;
    }

    /**
     * @return $this
     */
    public function schreibeDB(): self
    {
        $obj = GeneralObject::copyMembers($this);
        unset($obj->kWarenkorbPersPosEigenschaft);
        $this->kWarenkorbPersPosEigenschaft = Shop::Container()->getDB()->insert('twarenkorbpersposeigenschaft', $obj);

        return $this;
    }
}
