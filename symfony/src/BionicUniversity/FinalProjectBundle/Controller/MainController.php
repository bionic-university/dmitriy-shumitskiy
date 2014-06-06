<?php

namespace BionicUniversity\FinalProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('BionicUniversityFinalProjectBundle:Main:index.html.twig');
    }
}
