<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\House;

/**
 * Class OneRoom
 */
class OneRoom extends BlockOfFlats
{
    private $beds;
    private $windows;
    private $wifi;

    public function getBedAmount()
    {

        if ($this->square > 100) {
            $this->beds = 2;

        } else {
            $this->beds = 1;
        }
    }

    public function getWindowAmount()
    {
        if ($this->floors > 5) {

            $this->windows = 3;

        } else {
            $this->windows = 4;
        }
    }

    public function setWiFi()
    {

        $this->wifi = true;
        $this->pay = $this->pay + 50;
    }

} 