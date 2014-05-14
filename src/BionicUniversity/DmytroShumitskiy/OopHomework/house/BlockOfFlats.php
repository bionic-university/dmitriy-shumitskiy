<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\House;

/**
 * Class BlockOfFlats
 */
class BlockOfFlats extends AbstractBuilding
{
    /**
     * @var
     */
    protected $pay;

    public function getBuildingAddress()
    {
        echo($this->buildingNumber);
        echo($this->streetName);
        echo($this->country);
        echo($this->state);
    }

    public function rentPay($timeOfRent)
    {
        if ($this->state == 'UKR') {
            $this->pay = $this->square * $this->rooms * $this->timeOfRent;
        } else {
            echo('We can calculate only for UKR');

        }
    }

    /**
     * @return mixed
     */
    public function utilityServicesPrice()
    {
        return $this->square * 10;
    }
}