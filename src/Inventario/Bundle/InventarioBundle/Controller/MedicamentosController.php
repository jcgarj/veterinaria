<?php

namespace Inventario\Bundle\InventarioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\Bundle\InventarioBundle\Entity\Medicamentos;
use Inventario\Bundle\InventarioBundle\Form\MedicamentosType;

/**
 * Medicamentos controller.
 *
 */
class MedicamentosController extends Controller
{

    /**
     * Lists all Medicamentos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioBundle:Medicamentos')->findAll();

        return $this->render('InventarioBundle:Medicamentos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Medicamentos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Medicamentos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('medicamentos_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioBundle:Medicamentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Medicamentos entity.
     *
     * @param Medicamentos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Medicamentos $entity)
    {
        $form = $this->createForm(new MedicamentosType(), $entity, array(
            'action' => $this->generateUrl('medicamentos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Medicamentos entity.
     *
     */
    public function newAction()
    {
        $entity = new Medicamentos();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioBundle:Medicamentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Medicamentos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Medicamentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medicamentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioBundle:Medicamentos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Medicamentos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Medicamentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medicamentos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioBundle:Medicamentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Medicamentos entity.
    *
    * @param Medicamentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Medicamentos $entity)
    {
        $form = $this->createForm(new MedicamentosType(), $entity, array(
            'action' => $this->generateUrl('medicamentos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Medicamentos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioBundle:Medicamentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medicamentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('medicamentos_edit', array('id' => $id)));
        }

        return $this->render('InventarioBundle:Medicamentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Medicamentos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioBundle:Medicamentos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Medicamentos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('medicamentos'));
    }

    /**
     * Creates a form to delete a Medicamentos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('medicamentos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
