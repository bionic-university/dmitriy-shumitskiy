<?php

namespace BionicUniversity\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class User
 * @package BionicUniversity\UserBundle\Entity
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $role;

    /**
     * @var String
     */
    private $salt;
    /**
     * @var
     */
    private $termsAccepted;
    /**
     * @var Post
     */
    private $posts;

    public function __construct()
    {
        $this->role = array('ROLE_USER');
        $this->salt = base_convert(
            sha1(uniqid(mt_rand(), true)),
            16,
            36
        );
    }

    /**
     * @param \BionicUniversity\UserBundle\Entity\Post $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return \BionicUniversity\UserBundle\Entity\Post
     */
    public function getPosts()
    {
        return $this->posts;
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
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return $this->role;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getUsername()
    {
        return $this->email;
    }


    public function eraseCredentials()
    {
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean)$termsAccepted;
    }

    public function serialize()
    {
        return serialize(
            array(
                $this->id,
            )
        );
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            ) = unserialize($serialized);
    }

}
