<?php

declare(strict_types=1);

namespace JTL\Checkout;

use JTL\Shop;
use stdClass;

/**
 * Class Versand
 * @package JTL\Checkout
 */
class Versand
{
    /**
     * @var int|null
     */
    protected ?int $kVersand = null;

    /**
     * @var int|null
     */
    protected ?int $kLieferschein = null;

    /**
     * @var string|null
     */
    protected ?string $cLogistik = null;

    /**
     * @var string|null
     */
    protected ?string $cLogistikURL = null;

    /**
     * @var string|null
     */
    protected ?string $cIdentCode = null;

    /**
     * @var string|null
     */
    protected ?string $cHinweis = null;

    /**
     * @var string|null
     */
    protected ?string $dErstellt = null;

    /**
     * @var stdClass|null
     */
    protected ?stdClass $oData = null;

    /**
     * @param int           $id
     * @param stdClass|null $data
     */
    public function __construct(int $id = 0, stdClass $data = null)
    {
        if ($id > 0) {
            $this->loadFromDB($id, $data);
        }
    }

    /**
     * @param int           $id
     * @param stdClass|null $data
     */
    private function loadFromDB(int $id = 0, stdClass $data = null): void
    {
        $item = Shop::Container()->getDB()->select('tversand', 'kVersand', $id);

        $this->oData = $data;
        if ($item !== null && !empty($item->kVersand)) {
            $item->kVersand      = (int)$item->kVersand;
            $item->kLieferschein = (int)$item->kLieferschein;
            foreach (\array_keys(\get_object_vars($item)) as $member) {
                $this->$member = $item->$member;
            }
        }
    }

    /**
     * @param bool $primary
     * @return ($primary is true ? int|false : bool)
     */
    public function save(bool $primary = true): bool|int
    {
        $ins = new stdClass();
        foreach (\array_keys(\get_object_vars($this)) as $member) {
            $ins->$member = $this->$member;
        }
        unset($ins->kVersand);

        $key = Shop::Container()->getDB()->insert('tversand', $ins);
        if ($key < 1) {
            return false;
        }

        return $primary ? $key : true;
    }

    /**
     * @return int
     */
    public function update(): int
    {
        $upd                = new stdClass();
        $upd->kLieferschein = (int)$this->kLieferschein;
        $upd->cLogistik     = $this->cLogistik;
        $upd->cLogistikURL  = $this->cLogistikURL;
        $upd->cIdentCode    = $this->cIdentCode;
        $upd->cHinweis      = $this->cHinweis;
        $upd->dErstellt     = $this->dErstellt;

        return Shop::Container()->getDB()->update('tversand', 'kVersand', (int)$this->kVersand, $upd);
    }

    /**
     * @return int
     */
    public function delete(): int
    {
        return Shop::Container()->getDB()->delete('tversand', 'kVersand', (int)$this->kVersand);
    }

    /**
     * @param int $kVersand
     * @return $this
     */
    public function setVersand(int $kVersand): self
    {
        $this->kVersand = $kVersand;

        return $this;
    }

    /**
     * @param int $kLieferschein
     * @return $this
     */
    public function setLieferschein(int $kLieferschein): self
    {
        $this->kLieferschein = $kLieferschein;

        return $this;
    }

    /**
     * @param string $cLogistik
     * @return $this
     */
    public function setLogistik(string $cLogistik): self
    {
        $this->cLogistik = $cLogistik;

        return $this;
    }

    /**
     * @param string $cLogistikURL
     * @return $this
     */
    public function setLogistikURL(string $cLogistikURL): self
    {
        $this->cLogistikURL = $cLogistikURL;

        return $this;
    }

    /**
     * @param string $cIdentCode
     * @return $this
     */
    public function setIdentCode(string $cIdentCode): self
    {
        $this->cIdentCode = $cIdentCode;

        return $this;
    }

    /**
     * @param string $cHinweis
     * @return $this
     */
    public function setHinweis(string $cHinweis): self
    {
        $this->cHinweis = $cHinweis;

        return $this;
    }

    /**
     * @param string $dErstellt
     * @return $this
     */
    public function setErstellt(string $dErstellt): self
    {
        $this->dErstellt = $dErstellt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getVersand(): ?int
    {
        return $this->kVersand;
    }

    /**
     * @return int|null
     */
    public function getLieferschein(): ?int
    {
        return $this->kLieferschein;
    }

    /**
     * @return string|null
     */
    public function getLogistik(): ?string
    {
        return $this->cLogistik;
    }

    /**
     * @return string|null
     */
    public function getLogistikURL(): ?string
    {
        return $this->cLogistikURL;
    }

    /**
     * @return string|null
     */
    public function getIdentCode(): ?string
    {
        return $this->cIdentCode;
    }

    /**
     * @return string|null
     */
    public function getHinweis(): ?string
    {
        return $this->cHinweis;
    }

    /**
     * @return string|null
     */
    public function getErstellt(): ?string
    {
        return $this->dErstellt;
    }

    /**
     * @return string|null
     */
    public function getLogistikVarUrl(): ?string
    {
        $varUrl = $this->cLogistikURL;
        if (isset($this->oData->cPLZ)) {
            $varUrl = \str_replace(
                ['#PLZ#', '#IdentCode#'],
                [$this->oData->cPLZ, $this->cIdentCode],
                $this->cLogistikURL
            );
        }

        return $varUrl;
    }
}
