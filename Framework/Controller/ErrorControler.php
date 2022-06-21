<?php
namespace Controller;

use Abstrait\Controller;

class ErrorControler extends Controller {

  public function e404(){
    //affichage
    $this->voir('e404', ['titrePage' => 'oups', 'contenu' => 'Non trouvé']);

  }

}