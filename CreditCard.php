<?php
class CreditCard {
    private $number;
    private $owner;
    private $expire;
    private $cvv;

    public function __construct($number, $owner, $expire, $cvv){
      $this->product_name = $number;
      $this->price = $price;
      $this->expire = $expire;
      $this->cvv = $cvv;
    }

    public function getCardNumber()
    {
      return $this->$number;
    }

    public function setCardNumber($number)
    {
      $this->number = $number;
    }

    public function getOwner()
    {
      return $this->owner;
    }

    public function setOwner($owner)
    {
      $this->owner = $owner;
    }

    public function getExpire()
    {
      return $this->expire;
    }

    public function setExpire($expire)
    {
      $this->expire = $expire;
    }

    public function getCvv()
    {
      return $this->cvv;
    }

    public function setCvv($cvv)
    {
      $this->cvv = $cvv;
    }
  }
?>
