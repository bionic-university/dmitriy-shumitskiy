<?php

namespace BionicUniversity\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscribes
 */
class Subscribes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $subscriberId;

    /**
     * @var integer
     */
    private $authorId;


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
     * Set subscriberId
     *
     * @param integer $subscriberId
     * @return Subscribes
     */
    public function setSubscriberId($subscriberId)
    {
        $this->subscriberId = $subscriberId;

        return $this;
    }

    /**
     * Get subscriberId
     *
     * @return integer 
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     * @return Subscribes
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }
}
