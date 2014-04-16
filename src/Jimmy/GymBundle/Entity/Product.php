<?php

namespace Jimmy\GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
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
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $stock;


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
     * @return Product
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
     * @return Product
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
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sale_product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sale_product = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Sale_Product
     *
     * @param \Jimmy\GymBundle\Entity\SaleProduct $saleProduct
     * @return Product
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