<?php

/**
 * Class PrimeMinister
 */
class PrimeMinister extends AbstractCivilServant{
    private $ministers = [];
    public function setGovernment($ministers, $ministry){
        array_push($this->ministers, [$ministry, $ministers]);
    }

    /**
     * @return array
     */
    public function getMinisters()
    {
        return $this->ministers;
    }


} 