<?php
class User {

  use Auth;

  // private $username;
  // private $password;
  private $name;
  private $lastname;
  private $age;

  public function __construct($username, $password, $age){
    $this->username = $username;
    $this->password = $password;
    $this->age = $age;
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

  public function setCognome($lastname)
  {
    $this->cognome = $lastname;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setEta($age)
  {
    $this->eta = $age;
  }
}

trait Auth
{
  private $username;
  private $password;

  public function login($username, $password)
  {
    if ($username == $this->username && $password == $this->password) {
      return true;
    } else {
      return false;
    }
  }

  public function setUsername($username = '')
  {
    if (strlen($username) <= 2) {
      throw new Exception("Username must be more than 2 letters");
    }
    $this->username = $username;
  }

  public function setPassword($password = '')
  {
    if ($password == '') {
      throw new Exception("Password must be not empty string");
    } else if (strlen($password) <= '6'){
      throw new Exception("Password must be more than 6 letters");
    }
    $this->password = $password;
  }

  public static function authWithPassword()
  {
    return true;
  }
}

trait Premium
{
  private $premium_username;
  private $premium_password;

  public function premiumLogin($premium_username, $premium_password)
  {
    if ($premium_password == $this->username && $premium_password == $this->password) {
      return true;
    } else {
      return false;
    }
  }

  // public static function authWithPassword()
  // {
  //   return true;
  // }
}
?>
