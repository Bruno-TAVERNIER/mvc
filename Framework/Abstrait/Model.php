<?php
namespace Abstrait;
/** classe abstraite pour l'accès aux données */

abstract class Model {
  /** @var resource Connexion PDO */
  protected static $dbh = null;

  /** constructeur privé (singleton) */
  private function __construct() {}

  /** Methode statique getInstance() du singleton 
   * @return resource $dbh connexion PDO
  */
  public function getInstance(){
    if(is_null(self::$dbh)){
      try {
        self::$dbh = new \PDO(DSN, DBUSER, DBPASS);
      }
      catch(\Exception $e) {
        echo $e->getMessage();
      }
    }
    return self::$dbh;
  }

  /** recherche de tous les enregistrements */
  public function findAll(){
    $stmtAll = self::$dbh->prepare('SELECT * FROM '.$this->table);
    $stmtAll->execute();
    return $stmtAll->fetchAll(\PDO::FETCH_ASSOC);
  }

  /* recherche d'un enregistrement à partir de son id */
  public function find($id){
   $stmt1 = self::$dbh->prepare('SELECT * FROM '
                                . $this->table 
                                . ' WHERE '
                                . $this->id
                                .' =:id');
    $stmt1->bindValue(':id', $id, \PDO::PARAM_INT);
    $stmt1->execute();
    return $stmt1->fetch(\PDO::FETCH_ASSOC); 
  }

  /* exécution d'une requête préparée (CUD)*/
  public function exec($requete, $data){
    $stmtExec = self::$dbh->prepare($requete);
    return $stmtExec->execute($data);
  }
}