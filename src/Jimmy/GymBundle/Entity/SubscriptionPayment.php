<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriptionPayment
 */
class SubscriptionPayment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $payment_date;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var \Jimmy\GymBundle\Entity\Subscription
     */
    private $subscription;


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
     * Set payment_date
     *
     * @param \DateTime $paymentDate
     * @return SubscriptionPayment
     */
    public function setPaymentDate($paymentDate)
    {
        $this->payment_date = $paymentDate;

        return $this;
    }

    /**
     * Get payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return SubscriptionPayment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set subscription
     *
     * @param \Jimmy\GymBundle\Entity\Subscription $subscription
     * @return SubscriptionPayment
     */
    public function setSubscription(\Jimmy\GymBundle\Entity\Subscription $subscription = null)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get Subscription
     *
     * @return \Jimmy\GymBundle\Entity\Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
}