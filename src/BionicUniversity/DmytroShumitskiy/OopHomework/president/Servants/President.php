<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractCivilServant;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Government;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\Authorities\Supreme;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\InterfaceClasess\CivilServantInterface;

/**
 * Class President
 * @package President
 * "Класс ""Президент"", который умеет подписывать бумаги разных типов (к примеру, договора, контракты и заявления)
 * и отдавать определенные бумаги на доработку (только договора и контракты).
 * На вход подать строкой тип бумаги, на выходе - список действий, которые может сделать президент с ней. "
 */
class President extends AbstractCivilServant implements CivilServantInterface
{
    /**
     * @var
     */
    private $term;
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
     * @param $name
     * @param $surname
     * @param $age
     * @param $gender
     * @param $education
     * @param $experience
     * @param $citizenship
     * @param $term
     */
    public function __construct($name, $surname, $age, $gender, $education, $experience, $citizenship, $term)
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
     *                           Get paper from Government which should be read and sign or refused
     */
    public function getPaper(Government $object)
    {
        if ($object->getPaperType() == "Contract" or $object->getPaperType() == "Agreement" or $object->getPaperType(
            ) == "Statement" or $object->getPaperType() == "Act"
        ) {
            $this->readText($object);
        } else {
            echo('Can not work with this kind of paper');
        }
    }

    /**
     * @param Government $object
     *                           Read the Government paper and make decision rather to sign or refused
     *                           Only papers of Agreement and Contract may be pushed for rework to Government
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
     *                           Sign the paper and insert into array
     */
    private function setSignature(Government $object)
    {
        $this->signature = true;
        array_push($this->paper, [$object->getPaperType(), $object->getText(), $this->signature]);
    }

    /**
     * @param Government $object
     *                           Push the paper for further rework by Government
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

    /**
     * @return array
     */
    public function getWars()
    {
        return $this->war;
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
     *                              @param $name
     *                              @param $age
     *                              @param $citizenship
     *                              @param $education
     *                              @param $experience
     *                              @param $gender
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
     *                              Approve the head of Ministry which set the Prime Minister
     */
    public function approveMinistryHead(PrimeMinister $object)
    {
        array_push($object->approvedMinisters, [$object->getHeadOfMinistry(), $object->getMinistry(), "approved"]);
    }

    /**
     * @param Deputy  $deputy
     * @param Supreme $supreme
     *                         Sign or refused low accepted by Supreme
     */
    public function setLow(Deputy $deputy, Supreme $supreme)
    {
        if ($supreme->getVoteStatus() == 'true') {
            echo("Read text of low, to sign it press YES or NO to refuse:\n");
            $b = fgets(STDIN, 255);
            $b = trim($b);
            if ($b == 'YES') {
                array_push($deputy->acceptedLow, $deputy->getNewLow(), "Sign by president $this->name");
            } elseif ($b == 'NO') {
                array_push($deputy->refusedLow, $deputy->getNewLow(), "Refused by President. $this->name");
            } else {
                echo('Press YES or NO.');
            }
        } else {
            echo('Should be approved by Supreme.');
        }
    }
}
