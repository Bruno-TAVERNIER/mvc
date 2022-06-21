<?php
namespace Model;

use Abstrait\Model;
//class Conducteur extends Abstrait\Model
class Conducteur extends Model {

  /* nom de la table associée au modèle */
  protected $table = 'conducteur';
  /* nom du champs contenant les id */
  protected $id = 'id_conducteur';
  /* connexion PDO */
  private $cnx;

  /** Constructeur => récupérer une connexion */
  public function __construct(){
    $this->cnx = parent::getInstance();
  }

  /* requêtes perso */
  public function getVoitures($id){
    
  }
}