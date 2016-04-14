<?php

namespace Registro\Bundle\RegistroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Registro\Bundle\RegistroBundle\Entity\Mascota;
use Registro\Bundle\RegistroBundle\Form\MascotaType;

/**
 * Mascota controller.
 *
 */
class MascotaController extends Controller
{

    /**
     * Lists all Mascota entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RegistroBundle:Mascota')->findAll();

        return $this->render('RegistroBundle:Mascota:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Mascota entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Mascota();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mascota_show', array('id' => $entity->getId())));
        }

        return $this->render('RegistroBundle:Mascota:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Mascota entity.
     *
     * @param Mascota $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Mascota $entity)
    {
        $form = $this->createForm(new MascotaType(), $entity, array(
            'action' => $this->generateUrl('mascota_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Mascota entity.
     *
     */
    public function newAction()
    {
        $entity = new Mascota();
        $form   = $this->createCreateForm($entity);

        return $this->render('RegistroBundle:Mascota:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mascota entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:Mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mascota entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RegistroBundle:Mascota:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mascota entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:Mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mascota entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RegistroBundle:Mascota:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Mascota entity.
    *
    * @param Mascota $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Mascota $entity)
    {
        $form = $this->createForm(new MascotaType(), $entity, array(
            'action' => $this->generateUrl('mascota_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Mascota entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RegistroBundle:Mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mascota entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mascota_edit', array('id' => $id)));
        }

        return $this->render('RegistroBundle:Mascota:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Mascota entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RegistroBundle:Mascota')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mascota entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mascota'));
    }

    /**
     * Creates a form to delete a Mascota entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mascota_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
