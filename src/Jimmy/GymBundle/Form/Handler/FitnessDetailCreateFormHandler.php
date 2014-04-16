<?php

namespace Jimmy\GymBundle\Form\Handler;

use Symfony\Component\HttpFoundation\Request;
use Jimmy\GymBundle\Form\Handler\AbstractFitnessDetailFormHandler;
use Jimmy\GymBundle\Manager\UserManager;
use Jimmy\GymBundle\Entity\User;
use FOS\UserBundle\Util\TokenGenerator;

class FitnessDetailCreateFormHandler extends AbstractFitnessDetailFormHandler
{
    /**
     * @var \Jimmy\GymBundle\Manager\UserManager
     */
    protected $userManager;

    protected function onValid()
    {
        /* @var $fitnessDetail \Jimmy\GymBundle\Entity\FitnessDetail */
        $fitnessDetail = $this->data;

        $this->manager->saveFitnessDetail($fitnessDetail);
    }

    /**
     * @param UserManager $userManager
     */
    public function setUserManager(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @throws \Exception
     * @return \Jimmy\GymBundle\Manager\UserManager
     */
    public function getUserManager()
    {
        if (null === $this->userManager) {
            throw new \Exception('User manager not set in ' . get_class($this) . '.');
        }

        return $this->userManager;
    }

    /**
     * Sets the Token Generator
     *
     * @param TokenGenerator $tokenGenerator
     */
    public function setTokenGenerator(TokenGenerator $tokenGenerator)
    {
        $this->tokenGenerator = $tokenGenerator;
    }

    /**
     * Gets the Token Generator
     *
     * @throws \Exception
     * @return \FOS\UserBundle\Util\TokenGenerator
     */
    public function getTokenGenerator()
    {
        $tokenGenerator = $this->tokenGenerator;

        if (null === $tokenGenerator) {
            throw new \Exception('Token Generator not set in ' . get_class($this) . '.');
        }

        return $tokenGenerator;
    }
}
