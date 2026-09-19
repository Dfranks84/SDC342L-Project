<?php

/**
 * Product Model
 * Represents a product or service from the products_services table.
 */
class Product
{
    private $productServiceID;
    private $name;
    private $description;

    public function __construct(
        $productServiceID = null,
        $name = '',
        $description = ''
    ) {
        $this->productServiceID = $productServiceID;
        $this->name = $name;
        $this->description = $description;
    }

    public function getProductServiceID()
    {
        return $this->productServiceID;
    }

    public function setProductServiceID($productServiceID)
    {
        $this->productServiceID = $productServiceID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}