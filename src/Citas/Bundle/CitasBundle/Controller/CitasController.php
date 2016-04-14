<?php

namespace Citas\Bundle\CitasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Citas\Bundle\CitasBundle\Entity\Citas;
use Citas\Bundle\CitasBundle\Form\CitasType;

/**
 * Citas controller.
 *
 */
class CitasController extends Controller
{

    /**
     * Lists all Citas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CitasBundle:Citas')->findAll();

        return $this->render('CitasBundle:Citas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Citas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Citas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('citas_show', array('id' => $entity->getId())));
        }

        return $this->render('CitasBundle:Citas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Citas entity.
     *
     * @param Citas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Citas $entity)
    {
        $form = $this->createForm(new CitasType(), $entity, array(
            'action' => $this->generateUrl('citas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Citas entity.
     *
     */
    public function newAction()
    {
        $entity = new Citas();
        $form   = $this->createCreateForm($entity);

        return $this->render('CitasBundle:Citas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Citas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CitasBundle:Citas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Citas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CitasBundle:Citas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Citas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CitasBundle:Citas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Citas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CitasBundle:Citas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Citas entity.
    *
    * @param Citas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Citas $entity)
    {
        $form = $this->createForm(new CitasType(), $entity, array(
            'action' => $this->generateUrl('citas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Citas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CitasBundle:Citas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Citas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('citas_edit', array('id' => $id)));
        }

        return $this->render('CitasBundle:Citas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Citas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CitasBundle:Citas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Citas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('citas'));
    }

    /**
     * Creates a form to delete a Citas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('citas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
