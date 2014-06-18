<?php

namespace BionicUniversity\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;


class LoginController extends Controller
{

    public function loginAction()
    {
        $request = $this->get('request');
        $session = $this->get('session');

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('BionicUniversityUserBundle:UsersLogin:login.html.twig', array(
                'last_email' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            ));
    }
}