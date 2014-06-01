<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\President\AbstractClasess;

/**
 * Class AbstractCivilServant
 */
abstract class AbstractCivilServant
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $age;
    /**
     * @var
     */
    protected $gender;
    /**
     * @var
     */
    protected $education;
    /**
     * @var
     */
    protected $experience;
    /**
     * @var
     */
    protected $citizenship;
    /**
     * @var
     */
    protected $godMode;
    /**
     * @var
     */
    protected  $party;
    /**
     * @var array
     */
    protected $stuff = [];
    /**
     * @var array
     */
    protected $stuffForPublic = [];

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @return mixed
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setNedotorkannost()
    {
        $this->godMode = true;
        echo('God mode activated.');
    }

    /**
     * @return mixed
     */
    public function getParty()
    {
        return $this->party;
    }


}