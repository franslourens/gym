<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 */
class Sale
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
     * @var string
     */
    private $total_price;

    /**
     * @var string
     */
    private $payment_method;

    /**
     * @var \Jimmy\GymBundle\Entity\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Sale
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
     * Set total_price
     *
     * @param string $totalPrice
     * @return Sale
     */
    public function setTotalPrice($totalPrice)
    {
        $this->total_price = $totalPrice;

        return $this;
    }

    /**
     * Get total_price
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * Set payment_method
     *
     * @param string $paymentMethod
     * @return Sale
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->payment_method = $paymentMethod;

        return $this;
    }

    /**
     * Get payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Set User
     *
     * @param \Jimmy\GymBundle\Entity\User $user
     * @return Sale
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
     * Add Product
     *
     * @param \Jimmy\GymBundle\Entity\Product $product
     * @return Sale
     */
    public function addProduct(\Jimmy\GymBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove Product
     *
     * @param \Jimmy\GymBundle\Entity\Product $product
     */
    public function removeProduct(\Jimmy\GymBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get Product
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sale_product;


    /**
     * Add Sale_Product
     *
     * @param \Jimmy\GymBundle\Entity\SaleProduct $saleProduct
     * @return Sale
     */
    public function addSaleProduct(\Jimmy\GymBundle\Entity\SaleProduct $saleProduct)
    {
        $this->sale_product[] = $saleProduct;

        return $this;
    }

    /**
     * Remove Sale_Product
     *
     * @param \Jimmy\GymBundle\Entity\SaleProduct $saleProduct
     */
    public function removeSaleProduct(\Jimmy\GymBundle\Entity\SaleProduct $saleProduct)
    {
        $this->sale_product->removeElement($saleProduct);
    }

    /**
     * Get Sale_Product
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaleProduct()
    {
        return $this->sale_product;
    }
}