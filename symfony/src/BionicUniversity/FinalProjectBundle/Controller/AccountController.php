<?php
namespace BionicUniversity\FinalProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BionicUniversity\FinalProjectBundle\Form\Type\RegistrationType;
use BionicUniversity\FinalProjectBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller

{
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
                'action' => $this->generateUrl('account_create'),
            ));

        return $this->render(
            'BionicUniversityFinalProjectBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction(Request $request)
    {
        $projectEm = $this->get('doctrine.orm.project_entity_manager');

        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();

            $projectEm->persist($registration->getUser());
            $projectEm->flush();

            return $this->redirect("/main");
    }

        return $this->render(
            'BionicUniversityFinalProjectBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }
}