<?php

namespace Registro\Bundle\RegistroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Registro\Bundle\RegistroBundle\Entity\MVZ;
use Registro\Bundle\RegistroBundle\Form\MVZType;

/**
 * MVZ controller.
 *
 */
class MVZController extends Controller
{

    /**
     * Lists all MVZ entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RegistroBundle:MVZ')->findAll();

        return $this->render('RegistroBundle:MVZ:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MVZ entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MVZ();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mvz_show', array('id' => $entity->getId())));
        }

        return $this->render('RegistroBundle:MVZ:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MVZ entity.
     *
     * @param MVZ $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MVZ $entity)
    {
        $form = $this->createForm(new MVZType(), $entity, array(
            'action' => $this->generateUrl('mvz_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MVZ entity.
     *
     */
    public function newAction()
    {
        $entity = new MVZ();
        $form   = $this->createCreateForm($entity);

        return $this->render('RegistroBundle:MVZ:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MVZ entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:MVZ')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MVZ entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RegistroBundle:MVZ:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MVZ entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:MVZ')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MVZ entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RegistroBundle:MVZ:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MVZ entity.
    *
    * @param MVZ $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MVZ $entity)
    {
        $form = $this->createForm(new MVZType(), $entity, array(
            'action' => $this->generateUrl('mvz_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MVZ entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:MVZ')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MVZ entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mvz_edit', array('id' => $id)));
        }

        return $this->render('RegistroBundle:MVZ:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MVZ entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RegistroBundle:MVZ')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MVZ entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mvz'));
    }

    /**
     * Creates a form to delete a MVZ entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mvz_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
