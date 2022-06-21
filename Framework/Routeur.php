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
  // si on veut de la sécurité =>  [REMOTE_ADDR] => 192.168.1.5
  // ou par nom de machine / utilisateur:   [COMPUTERNAME] => DEV02 / [USERNAME] => Bruno

  //routes => tableau (path & controller/methode)
  //request => url demandée après http://localhost/mvc

  // ne gère pas les variables dans les url
  // http://localhost/mvc/produit/:id => indexCtrl/produit($id)
  // http://localhost/mvc/produit?id=123 => indexCtrl/produit($id)  [QUERY_STRING] => id=5&cat=3
  // ne gere pas non plus GET, POST, DELETE, PUT, PATCH, ... =>  [REQUEST_METHOD] => GET
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