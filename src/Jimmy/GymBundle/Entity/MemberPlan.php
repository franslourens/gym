<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberPlan
 */
class MemberPlan
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $start_date;

    /**
     * @var \DateTime
     */
    private $end_date;

    /**
     * @var \Jimmy\GymBundle\Entity\User
     */
    private $user;

    /**
     * @var \Jimmy\GymBundle\Entity\FitnessPlan
     */
    private $fitness_plan;


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
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return MemberPlan
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return MemberPlan
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set User
     *
     * @param \Jimmy\GymBundle\Entity\User $user
     * @return MemberPlan
     */
    public function setUser(\Jimmy\GymBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Jimmy\GymBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set Fitness_Plan
     *
     * @param \Jimmy\GymBundle\Entity\fitnessplan $fitnessPlan
     * @return MemberPlan
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