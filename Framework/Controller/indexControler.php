<?php
namespace Controller;

use Abstrait\Controller;
use Model\Conducteur;
use Model\Vehicules;

class IndexControler extends Controller {

  public function index() {
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

  public function vehicules() {
    $vehicules = new Vehicules();
    $liste = $vehicules->findAll();
    $vw = $vehicules->find(506); //ou 501 si non modifié dans le SQL
    $liste2 = $vehicules->findDriver(506);

    $this->voir('vehicules', ['titrePage' => 'Vehicules', 
                             'contenu' => '<h1>Nos Vehicules</h1>',
                             'vehicules' => $liste,
                             'vw' => $vw,
                             'conducteurs' => $liste2]);
  }
  /* silex : version ultra light de symfony 4 */
}