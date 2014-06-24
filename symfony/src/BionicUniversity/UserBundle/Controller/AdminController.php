<?php

namespace BionicUniversity\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller{
    public function indexAction()
    {
        return $this->render('BionicUniversityUserBundle:Admin:admin.html.twig');
    }

} 