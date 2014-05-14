<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractCivilServant;

/**
 * Class PrimeMinister
 */
class PrimeMinister extends AbstractCivilServant
{
    /**
     * @var array
     */
    public $ministers = [];
    /**
     * @var
     */
    private $ministersPeople;
    /**
     * @var
     */
    private $ministry;

    /**
     * @param $ministers
     * @param $ministry
     */
    public function setGovernment($ministers, $ministry)
    {
        $this->ministersPeople = $ministers;
        $this->ministry = $ministry;
    }

    /**
     * @return array
     */
    public function getMinisters()
    {
        return $this->ministers;
    }

    /**
     * @return mixed
     */
    public function getMinistersPeople()
    {
        return $this->ministersPeople;
    }

    /**
     * @return mixed
     */
    public function getMinistry()
    {
        return $this->ministry;
    }
} 