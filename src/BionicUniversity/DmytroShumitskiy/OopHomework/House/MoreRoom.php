<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\House;

/**
 * Class MoreRoom
 */
class MoreRoom extends BlockOfFlats
{
    /**
     * @var
     */
    private $beds;
    private $windows;
    private $wifi;
    private $clean;
    private $breakfast;

    public function getBedAmount()
    {

        if ($this->square > 200) {
            $this->beds = 5;

        } else {
            $this->beds = 3;
        }
    }

    public function getWindowAmount()
    {
        if ($this->floors > 5) {

            $this->windows = 6;

        } else {
            $this->windows = 5;
        }
    }

    public function setWiFi()
    {

        $this->wifi = true;
        $this->pay = $this->pay + 50;
    }

    public function setClean()
    {
        $this->clean = true;
        $this->pay = $this->pay + 150;
    }

    public function setBreakfast()
    {
        $this->breakfast = true;
        $this->pay = $this->pay + 100;
    }
}
