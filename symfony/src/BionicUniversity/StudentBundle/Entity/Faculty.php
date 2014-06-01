<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Faculty
 */
class Faculty
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $fullName;
    /**
     * @var university
     */
    private $university;
    /**
     * @var ArrayCollection
     */
    private $cafedras;

    /**
     * @param $cafedras
     */
    public function setCafedras($cafedras)
    {
        $this->cafedras = $cafedras;
    }

    /**
     * @return mixed
     */
    public function getCafedras()
    {
        return $this->cafedras;
    }


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
     * Set shortName
     *
     * @param string $shortName
     * @return Faculty
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
     * Set fullName
     *
     * @param string $fullName
     * @return Faculty
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

    public function getUniversity(){
        $this->university;
    }

    public function getUniversityShortName(){
        $this->university->getShortName();
    }

    /**
     * @param \BionicUniversity\StudentBundle\Entity\university $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }

    function __toString()
    {
        return $this->fullName;
    }



}
