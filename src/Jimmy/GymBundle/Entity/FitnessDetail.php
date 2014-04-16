<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FitnessDetail
 */
class FitnessDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $capture_date;

    /**
     * @var string
     */
    private $waist;

    /**
     * @var string
     */
    private $thigh;

    /**
     * @var string
     */
    private $upper_arm;

    /**
     * @var string
     */
    private $bmi;

    /**
     * @var string
     */
    private $resting_heart_rate;

    /**
     * @var \Jimmy\GymBundle\Entity\User
     */
    private $user;


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
     * Set capture_date
     *
     * @param \DateTime $captureDate
     * @return FitnessDetail
     */
    public function setCaptureDate($captureDate)
    {
        $this->capture_date = $captureDate;

        return $this;
    }

    /**
     * Get capture_date
     *
     * @return \DateTime
     */
    public function getCaptureDate()
    {
        return $this->capture_date;
    }

    /**
     * Set waist
     *
     * @param string $waist
     * @return FitnessDetail
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;

        return $this;
    }

    /**
     * Get waist
     *
     * @return string
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * Set thigh
     *
     * @param string $thigh
     * @return FitnessDetail
     */
    public function setThigh($thigh)
    {
        $this->thigh = $thigh;

        return $this;
    }

    /**
     * Get thigh
     *
     * @return string
     */
    public function getThigh()
    {
        return $this->thigh;
    }

    /**
     * Set upper_arm
     *
     * @param string $upperArm
     * @return FitnessDetail
     */
    public function setUpperArm($upperArm)
    {
        $this->upper_arm = $upperArm;

        return $this;
    }

    /**
     * Get upper_arm
     *
     * @return string
     */
    public function getUpperArm()
    {
        return $this->upper_arm;
    }

    /**
     * Set bmi
     *
     * @param string $bmi
     * @return FitnessDetail
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;

        return $this;
    }

    /**
     * Get bmi
     *
     * @return string
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Set resting_heart_rate
     *
     * @param string $restingHeartRate
     * @return FitnessDetail
     */
    public function setRestingHeartRate($restingHeartRate)
    {
        $this->resting_heart_rate = $restingHeartRate;

        return $this;
    }

    /**
     * Get resting_heart_rate
     *
     * @return string
     */
    public function getRestingHeartRate()
    {
        return $this->resting_heart_rate;
    }

    /**
     * Set User
     *
     * @param \Jimmy\GymBundle\Entity\User $user
     * @return FitnessDetail
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
}