<?php

/**
 * Class Garage
 */
class Garage extends AbstractBuilding
{
    /**
     * @var
     */
    private $rentPrice;

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
