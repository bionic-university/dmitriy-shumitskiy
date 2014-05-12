<?php

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

}