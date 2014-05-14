<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\House\buildConfigs;

/**
 * Class BuildingAddress
 */
class BuildingAddress
{

    /**
     * @var
     */
    public $buildingNumber;
    public $streetName;
    public $country;
    public $state;

    /**
     * @param $buildingNumber
     * @param $streetName
     * @param $country
     * @param $state
     */
    public function setAddress($buildingNumber, $streetName, $country, $state)
    {
        $this->buildingNumber = $buildingNumber;
        $this->streetName = $streetName;
        $this->country = $country;
        $this->state = $state;
    }

} 