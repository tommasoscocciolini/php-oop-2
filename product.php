<?php
class Product {
    private $product_name;
    private $price;
    private $created;
    private $quantity;

    public function __construct($product_name, $price, $created, $quantity){
      $this->product_name = $product_name;
      $this->price = $price;
      $this->age = $age;
    }

    public function getProductName()
    {
      return $this->product_name;
    }

    public function setProductName($product_name)
    {
      $this->product_name = $product_name;
    }

    public function getPrice()
    {
      return $this->price;
    }

    public function setPrice($price)
    {
      $this->price = $price;
    }

    public function getCreated()
    {
      return $this->created;
    }

    public function setCreated($created)
    {
      $this->created = $created;
    }

    public function getQuantity()
    {
      return $this->quantity;
    }

    public function setQuantity($created)
    {
      $this->quantity = $created;
    }
  }
?>
