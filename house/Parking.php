<?php

/**
 * Class Parking
 */
class Parking extends Garage
{

    private $cars;
    private $wash;

    public function rentPay($timeOfRent)
    {
        if ($this->cars >= 1) {
            $this->rentPrice = 200 * $this->cars * $this->timeOfRent;
        } else {
            echo('Sorry, set cars.');
        }

    }

    public function setCars($cars)
    {
        $this->cars = $cars;

    }

    public function setWash()
    {
        $this->wash = true;
        $this->rentPrice = $this->rentPrice + 50;
    }

} 