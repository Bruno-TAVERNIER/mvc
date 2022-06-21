<?php 
namespace Model;
use \Abstrait\Model;

class Vehicules extends Model {

  /* nom de la table dans la BDD */
  protected $table = 'Vehicule';
  /* champs id */
  protected $id = 'id_vehicule';
  /* connexion BDD */
  private $cnx;

  /* constructeur => connexion */
  public function __construct() {
    //appel du parent (singleton)
    $this->cnx = parent::getInstance();
  }

  /* requetes perso */
}