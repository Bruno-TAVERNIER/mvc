<?php
/* Controleur pour la page d'index */
namespace Controller;

use \Abstrait\Controller;
use Exception;
use \Model\Conducteur;

class IndexController extends Controller{

  public function __construct() {
    $titre = 'Accueil';
    $texte = 'lorem ipsum';
    try {
      $conducteur = new Conducteur();
    }
    catch(\Exception $e) {
      echo $e->getMessage();
    }
      $liste = $conducteur->findAll();
    $alex = $conducteur->find(5); 

    //affichage
    $this->voir('index', ['titrePage' => $titre, 'contenu' => $texte, 'liste' => $liste, 'alex' => $alex]);
  }

}