<?php

/**
 * Class Supreme
 */
class Supreme extends AbstractAuthorities
{
    /**
     * @var
     */
    private $number;
    /**
     * @var
     */
    private $text;
    /**
     * @var array
     */
    public $low = [];

    /**
     * @param $amount
     */
    function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function setNewLow()
    {
        echo("Enter low number\n");
        $this->number = fgets(STDIN, 255);
        echo("Enter Text\n");
        $this->text = fgets(STDIN, 255);
    }

    /**
     * @return array
     */
    public function getSignLow()
    {
        var_dump($this->low);
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
} 