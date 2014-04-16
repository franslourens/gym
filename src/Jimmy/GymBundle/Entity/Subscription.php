<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 */
class Subscription
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
    private $termination_date;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subscription_payment;

    /**
     * @var \Jimmy\GymBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subscription_payment = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Subscription
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
     * Set termination_date
     *
     * @param \DateTime $terminationDate
     * @return Subscription
     */
    public function setTerminationDate($terminationDate)
    {
        $this->termination_date = $terminationDate;

        return $this;
    }

    /**
     * Get termination_date
     *
     * @return \DateTime
     */
    public function getTerminationDate()
    {
        return $this->termination_date;
    }

    /**
     * Add Subscription_Payment
     *
     * @param \Jimmy\GymBundle\Entity\SubscriptionPayment $subscriptionPayment
     * @return Subscription
     */
    public function addSubscriptionPayment(\Jimmy\GymBundle\Entity\SubscriptionPayment $subscriptionPayment)
    {
        $this->subscription_payment[] = $subscriptionPayment;

        return $this;
    }

    /**
     * Remove Subscription_Payment
     *
     * @param \Jimmy\GymBundle\Entity\SubscriptionPayment $subscriptionPayment
     */
    public function removeSubscriptionPayment(\Jimmy\GymBundle\Entity\SubscriptionPayment $subscriptionPayment)
    {
        $this->subscription_payment->removeElement($subscriptionPayment);
    }

    /**
     * Get Subscription_Payment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscriptionPayment()
    {
        return $this->subscription_payment;
    }

    /**
     * Set user
     *
     * @param \Jimmy\GymBundle\Entity\User $user
     * @return Subscription
     */
    public function setUser(\Jimmy\GymBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Jimmy\GymBundle\Entity\user
     */
    public function getUser()
    {
        return $this->user;
    }
}