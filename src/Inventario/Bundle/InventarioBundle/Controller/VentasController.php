<?php

namespace Inventario\Bundle\InventarioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\Bundle\InventarioBundle\Entity\Ventas;
use Inventario\Bundle\InventarioBundle\Form\VentasType;

/**
 * Ventas controller.
 *
 */
class VentasController extends Controller
{

    /**
     * Lists all Ventas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioBundle:Ventas')->findAll();

        return $this->render('InventarioBundle:Ventas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ventas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ventas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ventas_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioBundle:Ventas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ventas entity.
     *
     * @param Ventas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ventas $entity)
    {
        $form = $this->createForm(new VentasType(), $entity, array(
            'action' => $this->generateUrl('ventas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ventas entity.
     *
     */
    public function newAction()
    {
        $entity = new Ventas();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioBundle:Ventas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ventas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Ventas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ventas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioBundle:Ventas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ventas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Ventas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ventas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioBundle:Ventas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ventas entity.
    *
    * @param Ventas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ventas $entity)
    {
        $form = $this->createForm(new VentasType(), $entity, array(
            'action' => $this->generateUrl('ventas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ventas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Ventas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ventas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ventas_edit', array('id' => $id)));
        }

        return $this->render('InventarioBundle:Ventas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ventas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioBundle:Ventas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ventas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ventas'));
    }

    /**
     * Creates a form to delete a Ventas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ventas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
