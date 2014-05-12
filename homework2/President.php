<?php

/**
 * Class President
 * @package homework2
 * "Класс ""Президент"", который умеет подписывать бумаги разных типов (к примеру, договора, контракты и заявления)
 * и отдавать определенные бумаги на доработку (только договора и контракты).
 * На вход подать строкой тип бумаги, на выходе - список действий, которые может сделать президент с ней. "
 */
class President extends AbstractCivilServant
{
    /**
     * @var
     */
    private $term;
    /**
     * @var
     */
    private $godMode;
    /**
     * @var
     */
    private $signature;
    /**
     * @var
     */
    private $referendum;
    /**
     * @var array
     */
    private $war = [];
    /**
     * @var array
     */
    private $paper = [];
    /**
     * @var array
     */
    private $stuff = [];
    /**
     * @var array
     */
    private $stuffForPublic = [];

    /**
     * @param $name
     * @param $surname
     * @param $age
     * @param $gender
     * @param $education
     * @param $experience
     * @param $citizenship
     * @param $term
     */
    function __construct($name, $surname, $age, $gender, $education, $experience, $citizenship, $term)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
        $this->education = $education;
        $this->experience = $experience;
        $this->citizenship = $citizenship;
        $this->term = $term;
    }

    /**
     * @param Government $object
     */
    public function getPaper(Government $object)
    {
        if ($object->getPaperType() == "Contract" or $object->getPaperType() == "Agreement" or $object->getPaperType(
            ) == "Statement" or $object->getPaperType() == "Low" or $object->getPaperType() == "Act"
        ) {
            $this->readText($object);
        } else {
            echo('Can not work with this kind of paper');
        }
    }

    /**
     * @param Government $object
     */
    private function readText(Government $object)
    {
        echo("If you read and everything ok type: YES or NO for terminate the signing\n");
        $a = fgets(STDIN, 255);
        $a = trim($a);
        if ($a == 'YES') {
            $this->setSignature($object);
        } elseif ($a == 'NO' && ($object->getPaperType() == 'Agreement' || $object->getPaperType() == 'Contract')) {
            $this->rework($object);
        } elseif ($a == 'NO') {
            echo("Signing terminated.\n");
        } else {
            echo("Type yes or no.\n");
        }
    }

    /**
     * @param Government $object
     */
    private function setSignature(Government $object)
    {
        $this->signature = true;
        array_push($this->paper, [$object->getPaperType(), $object->getText(), $this->signature]);
    }

    /**
     * @param Government $object
     */
    public function rework(Government $object)
    {
        $object->rework($object);
        if ($object->getRework() == 'n') {
            $this->getPaper($object);
        }
    }

    public function setReferendum()
    {
        $this->referendum = true;

    }

    /**
     * @param $country
     * @param $value
     */
    public function setWar($country, $value)
    {
        if ($value == true) {
            array_push($this->war, $country);
        } elseif ($value == false) {
            $key = array_search($country, $this->war);
            if ($key !== false) {
                unset($this->war[$key]);
                sort($this->war);
            }
        } else {
            echo('Set true or false to start or end the war');
        }
    }

    public function getWars()
    {
        var_dump($this->war);
    }

    /**
     * @return array
     */
    public function getListOfSignPaper()
    {
        return $this->paper;
    }

    public function speech()
    {
        echo('Дорогие соотечественники! За этот год мы стали жить лучше, экономика крепнет и мы всех победим, бла бла бла ...');
    }

    /**
     * @param PrimeMinister $object
     * @param $name
     * @param $age
     * @param $citizenship
     * @param $education
     * @param $experience
     * @param $gender
     */
    public function setPrimeMinister(PrimeMinister $object, $name, $age, $citizenship, $education, $experience, $gender)
    {
        if ($name != 'Azarov') {
            $object->name = $name;
            $object->age = $age;
            $object->citizenship = $citizenship;
            $object->education = $education;
            $object->experience = $experience;
            $object->gender = $gender;
        } else {
            echo('Go to hell! :)');
        }
    }

    public function setNedotorkannost()
    {
        $this->godMode = true;
        echo('God mode activated.');
    }

    /**
     * @param $house
     * @param $goldBaton
     * @param $helicopter
     * @param $money
     */
    public function makeSomeStuff($house, $goldBaton, $helicopter, $money)
    {
        array_push($this->stuff, $house, $goldBaton, $helicopter, $money);
    }

    /**
     * @param $votes
     */
    public function elections($votes)
    {
        if ($votes > 100500) {
            $this->makeSomeStuff('Mezhigorie', 'Cars', 'Plane', '$10000000');
        } else {
            echo('Cry, cry, cry...');
        }
    }

    public function setDeclaration()
    {
        array_push(
            $this->stuffForPublic,
            '1 car model 99 BAZ',
            '1 flat with 3 rooms',
            '5000grn per month income',
            '30000grn savings on bank account'
        );
    }

    /**
     * @return array
     */
    public function getStuffForPublic()
    {
        return $this->stuffForPublic;
    }

    /**
     * @param PrimeMinister $object
     */
    public  function setMinisters(PrimeMinister $object)
    {
        echo($object->getMinisters());
        array_push($object->getMinisters(), "approved");
    }
}