<?php
namespace Abstrait;

class View {
  /** @var string Nom de la vue à afficher */
  private $sVue;
  /** @var array Paramètres à afficher */
  private $tParams;

  public function __construct($sVue, $tParams){
    $this->sVue = 'Framework/View/'.$sVue;
    $this->tParams = $tParams;
  }

  // par simplicité, le nom de la vue sera suffixé par Layout
  public function afficher()
  {
    extract($this->tParams); //transformation de tableau en variables
    include $this->sVue.'Layout.php';
  }
}