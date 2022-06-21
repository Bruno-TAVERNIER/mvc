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
}