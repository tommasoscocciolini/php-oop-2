<?php
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

?>
