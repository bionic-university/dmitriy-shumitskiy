<?php

/**
 * Class AbstractAuthorities
 */
abstract class AbstractAuthorities {
    protected $ministry;
    protected $amount;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getMinistry()
    {
        return $this->ministry;
    }



} 