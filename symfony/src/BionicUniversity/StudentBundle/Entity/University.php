<?php

namespace BionicUniversity\StudentBundle\Entity;


/**
 * University
 */
class University
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var integer
     */
    private $accreditationLevel;

    /**
     * @var \DateTime
     */
    private $yearOfFoundation;

    private $faculties;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return University
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return University
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set acreditationLevel
     *
     * @param integer $acreditationLevel
     * @return University
     */
    public function setAccreditationLevel($acreditationLevel)
    {
        $this->accreditationLevel = $acreditationLevel;

        return $this;
    }

    /**
     * Get acreditationLevel
     *
     * @return integer 
     */
    public function getAccreditationLevel()
    {
        return $this->accreditationLevel;
    }

    /**
     * Set yearOfFoundation
     *
     * @param \DateTime $yearOfFoundation
     * @return University
     */
    public function setYearOfFoundation($yearOfFoundation)
    {
        $this->yearOfFoundation = $yearOfFoundation;

        return $this;
    }

    /**
     * Get yearOfFoundation
     *
     * @return \DateTime 
     */
    public function getYearOfFoundation()
    {
        return $this->yearOfFoundation;
    }

    public function getFaculties(){
        $this->faculties;
    }

    public function __toString(){
        return $this->shortName;
    }

    /**
     * @param mixed $faculties
     */
    public function setFaculties($faculties)
    {
        $this->faculties = $faculties;
    }

}
