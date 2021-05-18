<?php
require_once('Auth.php');

class User {

  use Auth;

  // private $username;
  // private $password;
  private $name;
  private $lastname;
  private $age;
  private $carta_credito;

  private $carrello = [];

  public function __construct($name, $lastname, $age, $username, $password){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->username = $username;
    $this->password = $password;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getLastname()
  {
    return $this->lastname;
  }

  public function setLastname($lastname)
  {
    $this->lastname = $lastname;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($age)
  {
    $this->age = $age;
  }

  public function setCartaDiCredito($carta_credito)
  {
    $this->carta_credito = $carta_credito;
  }

  public function aggiungiAlCarrello($prodotto, $quantity)
  {
    $this->carrello[] = [
      'product' => $prodotto,
      'quantity' => $quantity,
      ];
  }

  public function getCarrello()
  {
    return $this->carrello;
  }
}



// trait Premium
// {
//   private $premium_username;
//   private $premium_password;
//
//   public function premiumLogin($premium_username, $premium_password)
//   {
//     if ($premium_password == $this->username && $premium_password == $this->password) {
//       return true;
//     } else {
//       return false;
//     }
//   }

  // public static function authWithPassword()
  // {
  //   return true;
  // }

?>
