<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    private $full_name;

    /**
     * @var \DateTime
     */
    private $birth_date;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $sex;

    /**
     * @var string
     */
    private $contact_no;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sale;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subscription;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $member_plan;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fitness_detail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fitness_plan;

    /**
     * Constructor
     */
    public function __construct()
    {
    	parent::__construct();

        $this->sale = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subscription = new \Doctrine\Common\Collections\ArrayCollection();
        $this->member_plan = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fitness_detail = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fitness_plan = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set full_name
     *
     * @param string $fullName
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;

        return $this;
    }

    /**
     * Get full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Set birth_date
     *
     * @param \DateTime $birthDate
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;

        return $this;
    }

    /**
     * Get birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set contact_no
     *
     * @param string $contactNo
     * @return User
     */
    public function setContactNo($contactNo)
    {
        $this->contact_no = $contactNo;

        return $this;
    }

    /**
     * Get contact_no
     *
     * @return string
     */
    public function getContactNo()
    {
        return $this->contact_no;
    }

    /**
     * Add Sale
     *
     * @param \Jimmy\GymBundle\Entity\Sale $sale
     * @return User
     */
    public function addSale(\Jimmy\GymBundle\Entity\Sale $sale)
    {
        $this->sale[] = $sale;

        return $this;
    }

    /**
     * Remove Sale
     *
     * @param \Jimmy\GymBundle\Entity\Sale $sale
     */
    public function removeSale(\Jimmy\GymBundle\Entity\Sale $sale)
    {
        $this->sale->removeElement($sale);
    }

    /**
     * Get Sale
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Add Subscription
     *
     * @param \Jimmy\GymBundle\Entity\Subscription $subscription
     * @return User
     */
    public function addSubscription(\Jimmy\GymBundle\Entity\Subscription $subscription)
    {
        $this->subscription[] = $subscription;

        return $this;
    }

    /**
     * Remove Subscription
     *
     * @param \Jimmy\GymBundle\Entity\Subscription $subscription
     */
    public function removeSubscription(\Jimmy\GymBundle\Entity\Subscription $subscription)
    {
        $this->subscription->removeElement($subscription);
    }

    /**
     * Get Subscription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Add Member_Plan
     *
     * @param \Jimmy\GymBundle\Entity\MemberPlan $memberPlan
     * @return User
     */
    public function addMemberPlan(\Jimmy\GymBundle\Entity\MemberPlan $memberPlan)
    {
        $this->member_plan[] = $memberPlan;

        return $this;
    }

    /**
     * Remove Member_Plan
     *
     * @param \Jimmy\GymBundle\Entity\MemberPlan $memberPlan
     */
    public function removeMemberPlan(\Jimmy\GymBundle\Entity\MemberPlan $memberPlan)
    {
        $this->member_plan->removeElement($memberPlan);
    }

    /**
     * Get Member_Plan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMemberPlan()
    {
        return $this->member_plan;
    }

    /**
     * Add Fitness_Detail
     *
     * @param \Jimmy\GymBundle\Entity\FitnessDetail $fitnessDetail
     * @return User
     */
    public function addFitnessDetail(\Jimmy\GymBundle\Entity\FitnessDetail $fitnessDetail)
    {
        $this->fitness_detail[] = $fitnessDetail;

        return $this;
    }

    /**
     * Remove Fitness_Detail
     *
     * @param \Jimmy\GymBundle\Entity\FitnessDetail $fitnessDetail
     */
    public function removeFitnessDetail(\Jimmy\GymBundle\Entity\FitnessDetail $fitnessDetail)
    {
        $this->fitness_detail->removeElement($fitnessDetail);
    }

    /**
     * Get Fitness_Detail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFitnessDetail()
    {
        return $this->fitness_detail;
    }

    /**
     * Add Fitness_Plan
     *
     * @param \Jimmy\GymBundle\Entity\FitnessPlan $fitnessPlan
     * @return User
     */
    public function addFitnessPlan(\Jimmy\GymBundle\Entity\FitnessPlan $fitnessPlan)
    {
        $this->fitness_plan[] = $fitnessPlan;

        return $this;
    }

    /**
     * Remove Fitness_Plan
     *
     * @param \Jimmy\GymBundle\Entity\FitnessPlan $fitnessPlan
     */
    public function removeFitnessPlan(\Jimmy\GymBundle\Entity\FitnessPlan $fitnessPlan)
    {
        $this->fitness_plan->removeElement($fitnessPlan);
    }

    /**
     * Get Fitness_Plan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFitnessPlan()
    {
        return $this->fitness_plan;
    }
}