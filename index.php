<?php
/* $_GET, $_POST, $_REQUEST, $_SERVER, $_ENV, $_SESSION, $_COOKIE */
/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/

// le répertoire dans lequel se trouve l'appli
$base_url = '/mvc/';
//on le supprime de la demande (ex: /mvc/toto)
$request = substr($_SERVER['REQUEST_URI'], strlen($base_url));

//page d'accueil
if(trim($request) == '') $request = 'index';
//la première lettre d'une classe doit être une majuscule
$request = ucfirst($request);

//echo $request;
// paramétrage de l'appli
include 'params/config.php';
//un chargement automatique PSR-0
include 'params/autoload.php';

//par convention (et simplicité) le controleur appelé se nomme
// comme la page suivi de Controller
try {
  $controller = '\Controller\\'.$request.'Controller';
  //echo $controller;
  $app = new $controller;
}
catch(Exception $e){
  echo 'oups';
  echo $e->getMessage();
}
// si une seule instruction, accolade en option
/*if($a == 1) echo 'ok';

// si plusieurs instructions, accolades obligatoires pour créer un "bloc"
if($a == 1) {
  echo 'ok'; 
  $b = 'oui';
}*/

?>