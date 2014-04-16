<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionActivity
 */
class SessionActivity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $order_no;

    /**
     * @var integer
     */
    private $repititions;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var \Jimmy\GymBundle\Entity\Session
     */
    private $session;

    /**
     * @var \Jimmy\GymBundle\Entity\Activity
     */
    private $activity;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set order_no
     *
     * @param integer $orderNo
     * @return SessionActivity
     */
    public function setOrderNo($orderNo)
    {
        $this->order_no = $orderNo;

        return $this;
    }

    /**
     * Get order_no
     *
     * @return integer
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * Set repititions
     *
     * @param integer $repititions
     * @return SessionActivity
     */
    public function setRepititions($repititions)
    {
        $this->repititions = $repititions;

        return $this;
    }

    /**
     * Get repititions
     *
     * @return integer
     */
    public function getRepititions()
    {
        return $this->repititions;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return SessionActivity
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set Session
     *
     * @param \Jimmy\GymBundle\Entity\Session $session
     * @return SessionActivity
     */
    public function setSession(\Jimmy\GymBundle\Entity\Session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get Session
     *
     * @return \Jimmy\GymBundle\Entity\Session
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set Activity
     *
     * @param \Jimmy\GymBundle\Entity\Activity $activity
     * @return SessionActivity
     */
    public function setActivity(\Jimmy\GymBundle\Entity\Activity $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get Activity
     *
     * @return \Jimmy\GymBundle\Entity\Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }
}