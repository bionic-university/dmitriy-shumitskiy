<?php

namespace BionicUniversity\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('BionicUniversityUserBundle:User:index.html.twig');
    }
}