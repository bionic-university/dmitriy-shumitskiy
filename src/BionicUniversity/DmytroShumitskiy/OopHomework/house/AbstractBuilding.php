<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\House;
use BionicUniversity\DmytroShumitskiy\OopHomework\House\buildConfigs as buildConfigs;

/**
 * Class AbstractBuilding
 */
abstract class AbstractBuilding
{

    /**
     * @var
     */
    protected $material;
    protected $color;
    protected $floors;
    protected $square;
    protected $rooms;
    protected $buildingNumber;
    protected $streetName;
    protected $country;
    protected $state;
    protected $timeOfRent;

    abstract public function rentPay($timeOfRent);

    /**
     * @param buildConfigs\BuildingAddress $object
     */
    public function setAddress(buildConfigs\BuildingAddress $object)
    {
        $this->buildingNumber = $object->buildingNumber;
        $this->streetName = $object->streetName;
        $this->country = $object->country;
        $this->state = $object->state;
    }

    /**
     * @param buildConfigs\BuildingParams $object
     */
    public function setBuildingParams(buildConfigs\BuildingParams $object)
    {
        $this->material = $object->material;
        $this->color = $object->color;
        $this->floors = $object->floors;
        $this->square = $object->square;
        $this->rooms = $object->rooms;

    }

}
