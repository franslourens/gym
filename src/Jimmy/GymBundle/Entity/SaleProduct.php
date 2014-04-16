<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleProduct
 */
class SaleProduct
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return SaleProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var \Jimmy\GymBundle\Entity\Sale
     */
    private $sale;

    /**
     * @var \Jimmy\GymBundle\Entity\Product
     */
    private $product;


    /**
     * Set Sale
     *
     * @param \Jimmy\GymBundle\Entity\Sale $sale
     * @return SaleProduct
     */
    public function setSale(\Jimmy\GymBundle\Entity\Sale $sale = null)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get Sale
     *
     * @return \Jimmy\GymBundle\Entity\Sale
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set Product
     *
     * @param \Jimmy\GymBundle\Entity\Product $product
     * @return SaleProduct
     */
    public function setProduct(\Jimmy\GymBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get Product
     *
     * @return \Jimmy\GymBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}