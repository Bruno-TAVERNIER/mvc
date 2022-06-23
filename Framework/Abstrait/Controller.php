<?php
namespace Abstrait;

/** 
* Controleur abstrait => héritage obligatoire 
*/
abstract class Controller {

  /**
   * Appeler une vue pour l'afficher
   * @param string $sVue Nom de la vue à appeler
   * @param array $tParams Paramètres à afficher
   */
  public function voir($sVue, $tParams){
    //echo $sVue.'<br>';
    //print_r($tParams);
    $objView = new View($sVue, $tParams);
    $objView->afficher(); 
  }

  /**
   * Afficher une chaine pour API REST
   * @param string $chaine Chaine à afficher
   */
  public function afficher($chaine){
    echo $chaine;
  }

  /** Afficher une conversion JSON d'un objet ou tableau
   * @param mixed $tParams Infos à retourner en JSON
   */
  public function json($tParams) {
    echo json_encode($tParams);
  }

  // plus affichage binaire (image en base64 par ex)
}