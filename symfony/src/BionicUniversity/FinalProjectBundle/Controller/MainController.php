<?php

namespace BionicUniversity\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class User extends Controller
{
    public function indexAction()
    {
        return $this->render('BionicUniversityUserBundle:User:index.html.twig');
    }
}
