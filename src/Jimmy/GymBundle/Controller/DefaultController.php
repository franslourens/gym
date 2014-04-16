<?php

namespace Jimmy\GymBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		return $this->render('JimmyGymBundle:Default:index.html.twig');
    }

    public function productsAction()
    {
    	return $this->render('JimmyGymBundle:Default:products.html.twig');
    }

    public function registerAction()
    {
    	return $this->render('JimmyGymBundle:Default:register.html.twig');
    }

    public function profileAction()
    {
    	$email = 'test@test.com';
    	$password = 'test';
    	
    	$userManager = $this->getUserManager();
    	
    	$member = $userManager->createMember($email, $password);
    	$updateUser = $userManager->updateUser($member);
    	$user = $userManager->findUserByEmail($email);
    	
    	return $this->render('JimmyGymBundle:Default:profile.html.twig', array('user' => $user));
    }
    
    /**
     * @return \Jimmy\GymBundle\Manager\UserManager
     */
    public function getUserManager()
    {
    	return $this->get('gym.manager.user');
    }
}
