<?php

namespace BionicUniversity\UserBundle\Controller;

use BionicUniversity\UserBundle\Entity\Post;
use BionicUniversity\UserBundle\Form\Type\PostType;
use BionicUniversity\UserBundle\Form\Type\FilterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('BionicUniversityUserBundle::base.html.twig');
    }

    public function postAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $projectEm = $this->get('doctrine.orm.default_entity_manager');
                $projectEm->persist($post);
                $projectEm->flush();

                return $this->redirect("/user");
            }
        }
        return $this->render(
            'BionicUniversityUserBundle:User:Post.html.twig',
            array('form' => $form->createView())
        );
    }

    public function showAction(Request $request)
    {
        $form = $this->createForm(new FilterType());

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BionicUniversityUserBundle:Post')->findByModerate(1);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {
            $subject = $form['subjects']->getData();

            if ($form->isValid()) {

                $entities = $em->getRepository('BionicUniversityUserBundle:Post')->findBy(
                    array('moderate' => '1','subjects' => $subject)
                );
            }
            return $this->render(
                'BionicUniversityUserBundle:User:showAll.html.twig',
                array(
                    'entities' => $entities,
                    'form_filter' => $form->createView()
                )
            );
        }
        return $this->render(
            'BionicUniversityUserBundle:User:showAll.html.twig',
            array(
                'entities' => $entities,
                'form_filter' => $form->createView()
            )
        );

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function showPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityUserBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        return $this->render(
            'BionicUniversityUserBundle:User:show.html.twig',
            array(
                'entity' => $entity
            )
        );
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityUserBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render(
            'BionicUniversityUserBundle:User:edit.html.twig',
            array(
                'entity' => $entity,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * @param Post $entity
     * @return \Symfony\Component\Form\Form
     */
    private function createEditForm(Post $entity)
    {
        $form = $this->createForm(
            new PostType(),
            $entity,
            array(
                'action' => $this->generateUrl('post_update', array('id' => $entity->getId())),
                'method' => 'PUT',
            )
        );

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityUserBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('post_edit', array('id' => $id)));
        }

        return $this->render(
            'BionicUniversityUserBundle:User:edit.html.twig',
            array(
                'entity' => $entity,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BionicUniversityUserBundle:Post')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Post entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('all_post'));
    }

    /**
     * @param $id
     * @return \Symfony\Component\Form\Form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }

    public function myPostAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser()->getId();
        $entities = $em->getRepository('BionicUniversityUserBundle:Post')->findByAuthor($id);
        return $this->render(
            'BionicUniversityUserBundle:User:my_post.html.twig',
            array(
                'entities' => $entities
            )
        );
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function moderateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityUserBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        $entity->setModerate(true);
        $em->flush();
        return $this->redirect($this->generateUrl('all_post'));
    }

    public function showModerateAction(Request $request)
    {
        $form = $this->createForm(new FilterType());

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BionicUniversityUserBundle:Post')->findByModerate(0);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {
            $subject = $form['subjects']->getData();

            if ($form->isValid()) {

                $entities = $em->getRepository('BionicUniversityUserBundle:Post')->findBy(
                    array('moderate' => '1','subjects' => $subject)
                );
            }
            return $this->render(
                'BionicUniversityUserBundle:User:showAll.html.twig',
                array(
                    'entities' => $entities,
                    'form_filter' => $form->createView()
                )
            );
        }
        return $this->render(
            'BionicUniversityUserBundle:User:showAll.html.twig',
            array(
                'entities' => $entities,
                'form_filter' => $form->createView()
            )
        );

    }

    public function userGoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $idUser = $this->getUser()->getId();
        $entity2 = $em->getRepository('BionicUniversityUserBundle:Post')->find($id);
        if (!$entity2) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        $entity = $em->getRepository('BionicUniversityUserBundle:UserGo')->findByUserId($idUser)->findByPostId(
            $id
        )->findByStatus(true);
        if ($entity == true) {
            throw $this->createNotFoundException('Вы уже идете.');
        } else {
            $entity->setUserId($idUser);
            $entity->setPostId($id);
            $entity->setStatus(true);
            $entity2->setUserGo();
            $em->flush();
        }
        return $this->redirect($this->generateUrl('all_post'));
    }

    public function subscribeAction($author)
    {
        $em = $this->getDoctrine()->getManager();
        $idUser = $this->getUser()->getId();
        $entity = $em->getRepository('BionicUniversityUserBundle:Subscribes');
            $entity->setSubscriberId($idUser);
            $entity->setAuthorId($author);
            $em->flush();
        return $this->redirect($this->generateUrl('all_post'));
    }

}