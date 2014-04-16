<?php

namespace Jimmy\GymBundle\Form\Handler;

use Jimmy\GymBundle\Form\Handler\AbstractFormHandler;
use Jimmy\GymBundle\Entity\FitnessDetail;

/**
 * Common features for FitnessDetail forms.
 */
abstract class AbstractFitnessDetailFormHandler extends AbstractFormHandler
{
    /**
     * @var \Jimmy\GymBundle\Manager\FitnessDetailManager
     */
    protected $manager;

    /**
     * @var \Jimmy\GymBundle\Entity\FitnessDetail
     */
    protected $entity;
}