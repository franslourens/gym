<?php

namespace Jimmy\GymBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Jimmy\GymBundle\Entity\FitnessDetail;
use Jimmy\GymBundle\Form\FitnessDetailType;

/**
 * FitnessDetail controller.
 *
 */
class FitnessDetailController extends Controller
{

    /**
     * Lists all FitnessDetail entities.
     *
     */
    public function indexAction()
    {
        $fitnessDetail = $this->getFitnessDetailManager();

        $entities = $fitnessDetail->getRepository('JimmyGymBundle:FitnessDetail')->findAll();

        return $this->render('JimmyGymBundle:FitnessDetail:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FitnessDetail entity.
     *
     */
    public function createAction(Request $request)
    {
        $fitnessDetail = $this->getFitnessDetailManager()->createFitnessDetail();
        
        $form = $this->createCreateForm($fitnessDetail);
        
        $formHandler = $this->getFitnessDetailCreateFormHandler($form);

		if ($formHandler->process()) {;
            return $this->redirect($this->generateUrl('fitnessdetail_show', array('id' => $fitnessDetail->getId())));
        }

        return $this->render('JimmyGymBundle:FitnessDetail:new.html.twig', array(
            'entity' => $fitnessDetail,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a FitnessDetail entity.
    *
    * @param FitnessDetail $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(FitnessDetail $entity)
    {
        $form = $this->createForm(new FitnessDetailType(), $entity, array(
            'action' => $this->generateUrl('fitnessdetail_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FitnessDetail entity.
     *
     */
    public function newAction()
    {
        $fitnessDetail = $this->getFitnessDetailManager()->createFitnessDetail();
        $form   = $this->createCreateForm($fitnessDetail);

        return $this->render('JimmyGymBundle:FitnessDetail:new.html.twig', array(
            'entity' => $fitnessDetail,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FitnessDetail entity.
     *
     */
    public function showAction($id)
    {
        $manager = $this->getFitnessDetailManager();

        $fitnessDetail = $manager->getRepository('JimmyGymBundle:FitnessDetail')->find($id);

        if (!$fitnessDetail) {
            throw $this->createNotFoundException('Unable to find FitnessDetail entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JimmyGymBundle:FitnessDetail:show.html.twig', array(
            'entity'      => $fitnessDetail,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing FitnessDetail entity.
     *
     */
    public function editAction($id)
    {
        $manager = $this->getFitnessDetailManager();

        $fitnessDetail = $manager->getRepository('JimmyGymBundle:FitnessDetail')->find($id);

        if (!$fitnessDetail) {
            throw $this->createNotFoundException('Unable to find FitnessDetail entity.');
        }

        $editForm = $this->createEditForm($fitnessDetail);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JimmyGymBundle:FitnessDetail:edit.html.twig', array(
            'entity'      => $fitnessDetail,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FitnessDetail entity.
    *
    * @param FitnessDetail $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FitnessDetail $entity)
    {
        $form = $this->createForm(new FitnessDetailType(), $entity, array(
            'action' => $this->generateUrl('fitnessdetail_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FitnessDetail entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $manager = $this->getFitnessDetailManager();

        $fitnessDetail = $manager->getRepository('JimmyGymBundle:FitnessDetail')->find($id);

        if (!$fitnessDetail) {
            throw $this->createNotFoundException('Unable to find FitnessDetail entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($fitnessDetail);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $manager->flush();

            return $this->redirect($this->generateUrl('fitnessdetail_edit', array('id' => $id)));
        }

        return $this->render('JimmyGymBundle:FitnessDetail:edit.html.twig', array(
            'entity'      => $fitnessDetail,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FitnessDetail entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
			$manager = $this->getFitnessDetailManager();
        	$fitnessDetail = $manager->getRepository('JimmyGymBundle:FitnessDetail')->find($id);

            if (!$fitnessDetail) {
                throw $this->createNotFoundException('Unable to find FitnessDetail entity.');
            }

            $manager->em->remove($fitnessDetail);
            $manager->flush();
        }

        return $this->redirect($this->generateUrl('fitnessdetail'));
    }

    /**
     * Creates a form to delete a FitnessDetail entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fitnessdetail_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    /**
     * @return \Jimmy\GymBundle\Form\Handler\FitnessDetailCreateFormHandler
     */
    public function getFitnessDetailCreateFormHandler(Form $form = null)
    {
    	$handler = $this->get('gym.form_handler.fitness_detail.create');
    
    	if (!is_null($form)) {
    		$handler->setForm($form);
    	}
    
    	return $handler;
    }
    
    /**
     * @return \Jimmy\GymBundle\Manager\FitnessDetailManager FitnessDetail manager
     */
    public function getFitnessDetailManager()
    {
    	return $this->get('gym.manager.fitness_detail');
    }
}
