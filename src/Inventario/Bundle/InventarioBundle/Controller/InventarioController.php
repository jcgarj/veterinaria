<?php

namespace Inventario\Bundle\InventarioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\Bundle\InventarioBundle\Entity\Inventario;
use Inventario\Bundle\InventarioBundle\Form\InventarioType;

/**
 * Inventario controller.
 *
 */
class InventarioController extends Controller
{

    /**
     * Lists all Inventario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioBundle:Inventario')->findAll();

        return $this->render('InventarioBundle:Inventario:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Inventario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Inventario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inventario_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioBundle:Inventario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Inventario entity.
     *
     * @param Inventario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Inventario $entity)
    {
        $form = $this->createForm(new InventarioType(), $entity, array(
            'action' => $this->generateUrl('inventario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Inventario entity.
     *
     */
    public function newAction()
    {
        $entity = new Inventario();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioBundle:Inventario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Inventario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Inventario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inventario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioBundle:Inventario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Inventario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Inventario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inventario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioBundle:Inventario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Inventario entity.
    *
    * @param Inventario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Inventario $entity)
    {
        $form = $this->createForm(new InventarioType(), $entity, array(
            'action' => $this->generateUrl('inventario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Inventario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Inventario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inventario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('inventario_edit', array('id' => $id)));
        }

        return $this->render('InventarioBundle:Inventario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Inventario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioBundle:Inventario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Inventario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inventario'));
    }

    /**
     * Creates a form to delete a Inventario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inventario_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
