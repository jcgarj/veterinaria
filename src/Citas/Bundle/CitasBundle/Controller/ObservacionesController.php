<?php

namespace Citas\Bundle\CitasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Citas\Bundle\CitasBundle\Entity\Observaciones;
use Citas\Bundle\CitasBundle\Form\ObservacionesType;

/**
 * Observaciones controller.
 *
 */
class ObservacionesController extends Controller
{

    /**
     * Lists all Observaciones entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CitasBundle:Observaciones')->findAll();

        return $this->render('CitasBundle:Observaciones:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Observaciones entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Observaciones();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('observaciones_show', array('id' => $entity->getId())));
        }

        return $this->render('CitasBundle:Observaciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Observaciones entity.
     *
     * @param Observaciones $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Observaciones $entity)
    {
        $form = $this->createForm(new ObservacionesType(), $entity, array(
            'action' => $this->generateUrl('observaciones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Observaciones entity.
     *
     */
    public function newAction()
    {
        $entity = new Observaciones();
        $form   = $this->createCreateForm($entity);

        return $this->render('CitasBundle:Observaciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Observaciones entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CitasBundle:Observaciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Observaciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CitasBundle:Observaciones:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Observaciones entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CitasBundle:Observaciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Observaciones entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CitasBundle:Observaciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Observaciones entity.
    *
    * @param Observaciones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Observaciones $entity)
    {
        $form = $this->createForm(new ObservacionesType(), $entity, array(
            'action' => $this->generateUrl('observaciones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Observaciones entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CitasBundle:Observaciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Observaciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('observaciones_edit', array('id' => $id)));
        }

        return $this->render('CitasBundle:Observaciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Observaciones entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CitasBundle:Observaciones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Observaciones entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('observaciones'));
    }

    /**
     * Creates a form to delete a Observaciones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('observaciones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
