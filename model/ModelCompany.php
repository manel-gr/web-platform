<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelCompany extends Model{
//Même names et ordre que dans la table utilisateur
  private $id;
  private $name;
  private $email;
  private $password;
  private $numero;
  private $autre_numero;
  private $industy;
  private $location;
  private $country;
  private $ID_user;

  protected static $table = 'company';
  protected static $primary = 'id';

  public function __construct($id = NULL, $name = NULL,$email = NULL,$password = NULL,
  $num = NULL,$autre_num = NULL,$industry = NULL,$location = NULL,$country = NULL,$ID_user = NULL) {
    if (!is_null($id) && !is_null($name) && !is_null($email) && !is_null($password)
    && !is_null($numero) && !is_null($autre_numéro)  && !is_null($industry)  && !is_null($location) 
  && !is_null($country) && !is_null($ID_user)) {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
      $this->numero = $num; 
      $this->autre_numero = $autre_num; 
      $this->industry = $industry;
      $this->location = $location; 
      $this->country = $country;
      $this->ID_user = $ID_user;
     }
  } 
 public function getId() {
       return $this->id;
  }
 public function getName() {
       return $this->name;
  }
 
  public function getEmail() {
    return $this->email;
}
public function getPassword() {
  return $this->password;
}
public function getNum() {
  return $this->numero;
}
public function getAutre_num() {
    return $this->autre_numéro;
  }
public function getIndustry() {
  return $this->industry;
}
public function getLocation() {
  return $this->location; 

}
public function getCountry() {
    return $this->country;
  }

public function getID_user() {
  return $this->ID_user;
}

}
?>