<?php 
namespace Model;
use \Abstrait\Model;

class Vehicules extends Model {

  /* nom de la table dans la BDD */
  protected $table = 'vehicule';
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
  public function findDriver($id){
    $stmt3 = $this->cnx->prepare('SELECT * 
                                  FROM association_vehicule_conducteur as a
                                  JOIN conducteur as c
                                  ON a.id_conducteur = c.id_conducteur
                                  WHERE a.id_vehicule = :id');
    $stmt3->bindValue(':id', $id, \PDO::PARAM_INT);
    $stmt3->execute();
    return $stmt3->fetchAll(\PDO::FETCH_ASSOC);
  }
}