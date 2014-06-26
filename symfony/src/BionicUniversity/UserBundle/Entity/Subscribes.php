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
     * @var String
     */
    private $subscriber;

    /**
     * @var integer
     */
    private $authorId;

    private $authorPost;

    /**
     * @param $authorPost
     */
    public function setAuthorPost($authorPost)
    {
        $this->authorPost = $authorPost;
    }

    /**
     * @return mixed
     */
    public function getAuthorPost()
    {
        return $this->authorPost;
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
     * Set subscriber
     *
     * @param integer $subscriber
     * @return Subscribes
     */
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get subscriber
     *
     * @return string
     */
    public function getSubscriber()
    {
        return $this->subscriber;
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
