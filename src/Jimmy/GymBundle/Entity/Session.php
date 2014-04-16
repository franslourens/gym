<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 */
class Session
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
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session_activity;

    /**
     * @var \Jimmy\GymBundle\Entity\FitnessPlan
     */
    private $fitness_plan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->session_activity = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Session
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
     * Set description
     *
     * @param string $description
     * @return Session
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Session_Activity
     *
     * @param \Jimmy\GymBundle\Entity\SessionActivity $sessionActivity
     * @return Session
     */
    public function addSessionActivity(\Jimmy\GymBundle\Entity\SessionActivity $sessionActivity)
    {
        $this->session_activity[] = $sessionActivity;

        return $this;
    }

    /**
     * Remove Session_Activity
     *
     * @param \Jimmy\GymBundle\Entity\SessionActivity $sessionActivity
     */
    public function removeSessionActivity(\Jimmy\GymBundle\Entity\SessionActivity $sessionActivity)
    {
        $this->session_activity->removeElement($sessionActivity);
    }

    /**
     * Get Session_Activity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessionActivity()
    {
        return $this->session_activity;
    }

    /**
     * Set Fitness_Plan
     *
     * @param \Jimmy\GymBundle\Entity\FitnessPlan $fitnessPlan
     * @return Session
     */
    public function setFitnessPlan(\Jimmy\GymBundle\Entity\FitnessPlan $fitnessPlan = null)
    {
        $this->fitness_plan = $fitnessPlan;

        return $this;
    }

    /**
     * Get Fitness_Plan
     *
     * @return \Jimmy\GymBundle\Entity\FitnessPlan
     */
    public function getFitnessPlan()
    {
        return $this->fitness_plan;
    }
}