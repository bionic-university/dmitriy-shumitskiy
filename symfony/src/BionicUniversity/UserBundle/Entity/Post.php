<?php

namespace BionicUniversity\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $theme;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var User
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $postTime;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var bool
     */
    private $moderate = false;
    /**
     * @var string
     */
    private $subjects;
    /**
     * @var integer
     */
    private $userGo = 0;


    /**
     *
     */
    public function setUserGo()
    {
        $this->userGo = $this->userGo + 1;
    }

    /**
     * @return int
     */
    public function getUserGo()
    {
        return $this->userGo;
    }


    /**
     * @param string $subjects
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

    /**
     * @return string
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param boolean $moderate
     */
    public function setModerate($moderate)
    {
        $this->moderate = $moderate;
    }

    /**
     * @return boolean
     */
    public function getModerate()
    {
        return $this->moderate;
    }


    public function __construct()
    {
        $this->postTime = new \DateTime();
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
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
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Post
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Post
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set author
     *
     * @param integer $author
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return integer 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set postTime
     *
     * @param \DateTime $postTime
     * @return Post
     */
    public function setPostTime($postTime)
    {
        $this->postTime = $postTime;

        return $this;
    }

    /**
     * Get postTime
     *
     * @return \DateTime 
     */
    public function getPostTime()
    {
        return $this->postTime;
    }
}
