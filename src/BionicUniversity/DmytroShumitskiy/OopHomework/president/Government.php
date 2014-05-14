<?php

/**
 * Class Government
 */
class Government extends AbstractAuthorities
{
    /**
     * @var array
     */
    private $forRevision = [];
    /**
     * @var
     */
    private $paperType;
    /**
     * @var
     */
    private $text;
    /**
     * @var
     */
    private $rework;
    /**
     * @var
     */
    private $science;
    /**
     * @var
     */
    private $pensions;
    /**
     * @var
     */
    private $salary;
    /**
     * @var
     */
    private $medicine;

    /**
     * @param $ministry
     * @param $amount
     */
    public function __construct($ministry, $amount)
    {
        $this->ministry = $ministry;
        $this->amount = $amount;
    }

    /**
     * @param Government $object
     */
    public function rework(Government $object)
    {
        echo("Rework now or later? Press key n or l\n");
        $object->rework = fgets(STDIN, 255);
        $object->rework = trim($object->rework);
        if ($object->rework == 'n') {
            echo("Type new text\n");
            $object->text = fgets(STDIN, 255);
            $object->text = trim($this->text);
        } elseif ($object->rework == 'l') {
            array_push($object->forRevision, [$object->paperType, $object->text]);
        } else {
            echo("Type l or n.\n");
        }
    }

    /**
     * @return mixed
     */
    public function getRework()
    {
        return $this->rework;
    }

    /**
     * Can push Contract, Act, Agreement, Statement document type only
     */
    public function pushPaper()
    {
        echo("Enter paper type\n");
        $this->paperType = fgets(STDIN, 255);
        echo("Enter Text\n");
        $this->text = fgets(STDIN, 255);
        $this->paperType = trim($this->paperType);
    }

    public function getPaperForRevision()
    {
        var_dump($this->forRevision);
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getPaperType()
    {
        return $this->paperType;
    }

    public function setBudget($taxes)
    {
        $this->medicine = 0.3 * $taxes;
        $this->science = 0.1 * $taxes;
        $this->pensions = 0.2 * $taxes;
        $this->salary = 0.4 * $taxes;
    }


}