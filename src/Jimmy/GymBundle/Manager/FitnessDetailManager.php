<?php

namespace Jimmy\GymBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Persistence\ObjectRepository;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Jimmy\GymBundle\Entity\FitnessDetail;
use Jimmy\GymBundle\Manager\AbstractBaseManager;

/**
 * FitnessDetail manager
 */
class FitnessDetailManager extends AbstractBaseManager
{
    /**
     * Creates an empty FitnessDetail
     *
     * @return FitnessDetail
     */
    public function createFitnessDetail()
    {
        $fitnessDetail = new FitnessDetail();

        return $fitnessDetail;
    }

    /**
     * Saves an FitnessDetail
     *
     * @param FitnessDetail $fitnessDetail
     * @param boolean $andFlush Whether to flush the changes (default true)
     */
    public function saveFitnessDetail(FitnessDetail $fitnessDetail, $andFlush = true)
    {
        $this->persistAndFlush($fitnessDetail, $andFlush);
    }

    /**
     * Returns the fully qualified FitnessDetail class name
     *
     * @return string
     */
    public function getClass()
    {
        return 'Jimmy\GymBundle\Entity\FitnessDetail';
    }
}