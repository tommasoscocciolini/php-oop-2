<?php
class UtentePremium extends User
{
  // private $premium_username;
  // private $premium_password;
  private $codice_sconto;

  public function __construct($name, $lastname, $age, $username, $password, $codice_sconto){
  {
    parent::__construct($name, $lastname, $age, $username, $password);
    $this->codice_sconto = $codice_sconto;
  }
 ?>
