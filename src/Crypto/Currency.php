<?php

namespace Crypto;

class Currency
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $change;

    /**
     * @var bool
     */
    private $showChange;

    /**
     * @return bool
     */
    public function hasShowChange()
    {
        return $this->showChange;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getChange()
    {
        return round($this->change, 3);
    }

    /**
     * @param float $change
     */
    public function setChange($change)
    {
        $this->change = $change;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return bool
     */
    public function isShowChange()
    {
        return $this->showChange;
    }

    /**
     * @param bool $showChange
     */
    public function setShowChange($showChange)
    {
        $this->showChange = $showChange;
    }
}
