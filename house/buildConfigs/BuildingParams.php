<?php
namespace buildConfigs;

/**
 * Class BuildingParams
 */
class BuildingParams
{

    /**
     * @var
     */
    public $material;
    public $color;
    public $floors;
    public $square;
    public $rooms;

    /**
     * @param $material
     * @param $color
     * @param $floors
     * @param $square
     * @param $rooms
     */
    public function setParams($material, $color, $floors, $square, $rooms)
    {
        $this->material = $material;
        $this->color = $color;
        $this->floors = $floors;
        $this->square = $square;
        $this->rooms = $rooms;
    }

} 