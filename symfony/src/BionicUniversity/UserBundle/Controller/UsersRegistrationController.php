<?php

namespace BionicUniversity\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BionicUniversity\UserBundle\Form\Type\UsersRegistrationType;
use BionicUniversity\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class UsersRegistrationController extends Controller

{
    public function registerAction(Request $request)
    {
        $registration = new User();
        $form = $this->createForm(new UsersRegistrationType(), $registration);
        if ($request->getMethod() == 'POST') {
        $form->handleRequest($request);

        if ($form->isValid()) {
            $projectEm = $this->get('doctrine.orm.default_entity_manager');
            $factory = $this->container->get('security.encoder_factory');
            $encoder = $factory->getEncoder($registration);
            $password = $encoder->encodePassword($registration->getPassword(), $registration->getSalt());
            $registration->setPassword($password);
            $projectEm->persist($registration);
            $projectEm->flush();

            return $this->redirect("/user");
        }
        }
        return $this->render(
            'BionicUniversityUserBundle:UsersRegistration:register.html.twig',
            array('form' => $form->createView())
        );
    }
}