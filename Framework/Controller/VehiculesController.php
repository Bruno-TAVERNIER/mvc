<?php
namespace Controller;

use Abstrait\Controller;
use Model\Vehicules;

class VehiculesController extends Controller {

  public function __construct(){

    $vehicules = new Vehicules();
    $liste = $vehicules->findAll();
    $vw = $vehicules->find(506);
    // $liste2 = $vehicules->findDriver(506);

    $this->voir('vehicules', ['titrePage' => 'Vehicules', 
                             'contenu' => '<h1>Nos Vehicules</h1>',
                             'vehicules' => $liste,
                             'vw' => $vw]);
  }
}