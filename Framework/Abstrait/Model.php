<?php
namespace Abstrait;
/** classe abstraite pour l'accès aux données */

abstract class Model {
  /** @var resource Connexion PDO */
  protected static $dbh = null;
  /** nom de la table (idem Modèle) */
  protected $tbl;
  /** identifiant de la table (id_tbl) */ 
  protected $ident;

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
    /* si on veut que le nomde la classe et de la table soient identique...
      et si on veut que l'id soit id_ + nom table */
    $this->tbl = get_class($this);
    $this->tbl = strtolower(substr($this->tbl, strripos($this->tbl, '\\') + 1));
    $this->ident = 'id_' .  $this->tbl;
    //file_put_contents('model.txt', $this->tbl . ' ' . $this->ident . PHP_EOL, FILE_APPEND);
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

  /* export CSV d'une table (compatible Excel) */
  public function export() {
    $stmtAll = self::$dbh->prepare('SELECT * FROM '.$this->table);
    $stmtAll->execute();
    $retour = $stmtAll->fetchAll(\PDO::FETCH_ASSOC);
    $fh = fopen(EXPORTS.'export_'.$this->tbl.'.csv', 'w');
    //ligne d'entête
    fputcsv($fh, array_keys($retour[0]), ';');
    foreach($retour as $ligne){
      fputcsv($fh, $ligne, ";");
    }
    fclose($fh);
  }

}