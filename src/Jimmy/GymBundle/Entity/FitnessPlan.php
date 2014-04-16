<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FitnessPlan
 */
class FitnessPlan
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
     * @var boolean
     */
    private $publish;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $member_plan;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session;

    /**
     * @var \Jimmy\GymBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->member_plan = new \Doctrine\Common\Collections\ArrayCollection();
        $this->session = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return FitnessPlan
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
     * Set publish
     *
     * @param boolean $publish
     * @return FitnessPlan
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get publish
     *
     * @return boolean
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return FitnessPlan
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
     * Set comment
     *
     * @param string $comment
     * @return FitnessPlan
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Add Member_Plan
     *
     * @param \Jimmy\GymBundle\Entity\MemberPlan $memberPlan
     * @return FitnessPlan
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
     * Get member_plan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMemberPlan()
    {
        return $this->member_plan;
    }

    /**
     * Add Session
     *
     * @param \Jimmy\GymBundle\Entity\Session $session
     * @return FitnessPlan
     */
    public function addSession(\Jimmy\GymBundle\Entity\Session $session)
    {
        $this->session[] = $session;

        return $this;
    }

    /**
     * Remove Session
     *
     * @param \Jimmy\GymBundle\Entity\Session $session
     */
    public function removeSession(\Jimmy\GymBundle\Entity\Session $session)
    {
        $this->session->removeElement($session);
    }

    /**
     * Get session
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set User
     *
     * @param \Jimmy\GymBundle\Entity\User $user
     * @return FitnessPlan
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