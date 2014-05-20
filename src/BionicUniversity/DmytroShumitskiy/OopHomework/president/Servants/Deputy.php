<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractCivilServant;
use BionicUniversity\DmytroShumitskiy\OopHomework\President\InterfaceClasess\CivilServantInterface;

/**
 * Class Deputy
 * @package BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants
 */
class Deputy extends AbstractCivilServant implements CivilServantInterface
{
    /**
     * @var
     */
    private $party;
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
    private $newLow = [];
    /**
     * @var array
     */
    public $acceptedLow = [];
    /**
     * @var array
     */
    public $refusedLow = [];

    /**
     * @param $name
     * @param $surname
     * @param $age
     * @param $gender
     * @param $education
     * @param $experience
     * @param $citizenship
     * @param $party
     */
    public function __construct($name, $surname, $age, $gender, $education, $experience, $citizenship, $party)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
        $this->education = $education;
        $this->experience = $experience;
        $this->citizenship = $citizenship;
        $this->party = $party;
    }

    public function speech()
    {
        echo('Уважаемые избератели, я обещаю защищать ваши интересы и не воровать :)');
    }

    /**
     * Set new low by the depute, to come into effect
     * should be accepted both by Supreme and President
     * vote() method in Supreme class and setLow() method in President class
     */
    public function setNewLow()
    {
        echo("Enter low number\n");
        $this->number = fgets(STDIN, 255);
        echo("Enter Text\n");
        $this->text = fgets(STDIN, 255);
        array_push($this->newLow, [$this->number, $this->text, "Author $this->name"]);
    }

    /**
     * @return array
     */
    public function getAcceptedLow()
    {
        echo("Accepted lows, author $this->name : \n $this->acceptedLow");
    }

    /**
     * @return array
     */
    public function getRefusedLow()
    {
        echo("Refused lows, author $this->name : \n $this->acceptedLow");
    }

    /**
     * @return array
     */
    public function getNewLow()
    {
        return $this->newLow;
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

    public function setDeclaration()
    {
        array_push(
            $this->stuffForPublic,
            '2 car model Lanos',
            '1 flat with 1 rooms',
            '2000grn per month income',
            '15000grn savings on bank account'
        );
    }

    public function getStuffForPublic()
    {
        return $this->stuffForPublic;
    }
}
