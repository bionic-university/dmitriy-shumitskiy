<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess;

/**
 * Class AbstractAuthorities
 */
abstract class AbstractAuthorities
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
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
    public function getName()
    {
        return $this->name;
    }


}