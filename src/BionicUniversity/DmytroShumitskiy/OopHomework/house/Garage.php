<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\House;

/**
 * Class Garage
 */
class Garage extends AbstractBuilding
{
    /**
     * @var
     */
    public $rentPrice;

    public function rentPay($timeOfRent)
    {
        if ($this->square > 100) {
            $this->rentPrice = 200 * $this->square * $this->timeOfRent;
        } else {
            $this->rentPrice = 150 * $this->square * $this->timeOfRent;
        }

    }

    public function securityPrice($timeOfRen)
    {
        return $timeOfRen * 400;

    }
}
