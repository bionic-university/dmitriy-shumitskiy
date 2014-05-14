<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants;

use BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess\AbstractCivilServant;

/**
 * Class Deputy
 * @package BionicUniversity\DmytroShumitskiy\OopHomework\President\Servants
 */
class Deputy extends AbstractCivilServant
{
    private $party;
    private $number;
    private $text;
    private $godMode;
    private $newLow = [];
    public  $acceptedLow = [];
    public  $refusedLow = [];

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
        echo("Accepted lows by $this->name \n $this->acceptedLow");
    }

    /**
     * @return array
     */
    public function getRefusedLow()
    {
        echo("Refused lows by $this->name \n $this->acceptedLow");
    }

    /**
     * @return array
     */
    public function getNewLow()
    {
        return $this->newLow;
    }


    public function setNedotorkannost()
    {
        $this->godMode = true;
        echo('God mode activated.');
    }
} 