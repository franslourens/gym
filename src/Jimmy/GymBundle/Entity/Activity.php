<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 */
class Activity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session_activity;

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
     * Set name
     *
     * @param string $name
     * @return Activity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Activity
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
     * @param \Jimmy\GymBundle\Entity\sessionactivity $sessionActivity
     * @return Activity
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
}