<?php

class Routeur {

  protected $routes;
  protected $request;
  protected $controller = null;
  protected $methode = null;

  public function __construct($routes, $request) {
    $this->routes = $routes; 
    $this->request = $request;
  }

  //routes => tableau (path & controller/methode)
  //request => url demandée après http://localhost/mvc
  public function getController() :string {
    foreach($this->routes as $r){
      if($r['path'] == $this->request) $this->controller = $r['ctrl'];
    }
    //si url non trouvée dans le path, => erreur 404
    if(is_null($this->controller)) $this->controller = 'ErrorControler/e404';
    //controleur = ctrl + methode
    $tCtrl = explode('/', $this->controller);
    $this->methode = $tCtrl[1];
    return '\Controller\\' . $tCtrl[0];
  }

  public function getMethode() {
    return $this->methode;
  }


}