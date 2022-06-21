<?php
/* autoload compatible PSR-0 */

function autoload($className) {
  //répertoire de base pour toutes les classes
  $folder = 'Framework/';
  //on enlève le \ qu'il y a à gauche
  $className = ltrim($className, '\\'); 
  $fileName = ''; //nom du fichier
  $nameSpace = ''; // namespace (répertoires)
  if($lastNsPos = strripos($className, '\\')){
    //le namespace se trouve à gauche du dernier \
    $nameSpace = substr($className, 0, $lastNsPos);
    //le nom de la classe se trouve à droite du dernier \
    $className = substr($className, $lastNsPos + 1);
    $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $nameSpace.DIRECTORY_SEPARATOR);
  }
  //concaténation, ne pas oublier le . devant le =
  $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';
  //insertion du script si existant
  if(file_exists($folder.$fileName)){
    require_once $folder.$fileName;
  }
  //sinon E404
  else {
    require 'Framework/View/404Layout.php';
    exit;
  }
}
//ajout à la file d'attente des chargements
spl_autoload_register('autoload');