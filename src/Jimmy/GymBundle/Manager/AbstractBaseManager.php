<?php

namespace Jimmy\GymBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Doctrine\ORM\UnitOfWork;

abstract class AbstractBaseManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var EntityRepository
     */
    protected $repository;

    /**
     * @var EventDispatcherInterface
     */
    protected $dispatcher;

    /**
     * Constructor.
     *
     * @param EntityManager $em
     * @param string $class
     */
    public function __construct(EntityManager $em, EventDispatcherInterface $dispatcher) {
        $this->em = $em;
        $this->repository = $em->getRepository($this->getClass());
        $this->dispatcher = $dispatcher;
    }

    /**
     * Persists a new entity and flushes the entity manager.
     *
     * @param object $entity
     * @param boolean $andFlush
     */
    protected function persistAndFlush($entity, $andFlush)
    {
        $isPersisted = UnitOfWork::STATE_MANAGED === $this->em->getUnitOfWork()->getEntityState($entity);

        if (!$isPersisted) {
                $this->em->persist($entity);
        }

        if ($andFlush) {
            $this->em->flush();
        }
    }

    /**
     * Removes an entity and optionally flushes the entity manager.
     *
     * @param object $entity
     * @param boolean $andFlush
     */
    protected function removeAndFlush($entity, $andFlush)
    {
        $this->em->remove($entity);

        if ($andFlush) {
            $this->em->flush();
        }
    }

    /**
     * Flushes the entity manager.
     */
    public function flush()
    {
        $this->em->flush();
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return string
     */
    abstract public function getClass();
}