<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelCandidat extends Model{
//Même names et ordre que dans la table utilisateur
  private $id;
  private $name;
  private $family_name;
  private $email;
  private $password;
  private $num;
  private $date_de_naissance;
  private $location_candidat;
  private $ID_user;

  protected static $table = 'candidat';
  protected static $primary = 'id';

  public function __construct($id = NULL, $name = NULL, $family_name = NULL,$email = NULL,$password = NULL,
  $num = NULL,$date_de_naissance = NULL,$location_candidat = NULL,$ID_user = NULL) {
    if (!is_null($id) && !is_null($name) && !is_null($family_name) && !is_null($email) && !is_null($password)
    && !is_null($num) && !is_null($date_de_naissance) && !is_null($location_candidat) && !is_null($ID_user)) {
      $this->id = $id;
      $this->name = $name;
      $this->family_name = $family_name;
      $this->email = $email;
      $this->password = $password;
      $this->num = $num;
      $this->date_de_naissance = $date_de_naissance;
      $this->location_candidat = $location_candidat;
      $this->ID_user = $ID_user;
     }
  } 
 public function getId() {
       return $this->id;
  }
 public function getName() {
       return $this->name;
  }
  public function getFamily_name() {
       return $this->family_name;
  }
  public function getEmail() {
    return $this->email;
}
public function getPassword() {
  return $this->password;
}
public function getNum() {
  return $this->num;
}
public function getDate_de_naissance() {
  return $this->date_de_naissance;
}
public function getLocation_candidat() {
  return $this->location_candidat;
}
public function getID_user() {
  return $this->ID_user;
}

}
?>