<?php
// tableau des routes 
$routes = [
  ['path' => '/', 'ctrl' => 'IndexControler/index'],
  ['path' => '/contact', 'ctrl' => 'IndexControler/contact'],
  ['path' => '/util', 'ctrl' => 'IndexControler/util'],
  ['path' => '/login', 'ctrl' => 'SecurityControler/login'],
  ['path' => '/vehicules', 'ctrl' => 'indexControler/vehicules'],
  ['path' => '/vehicule/:id', 'ctrl' => 'indexControler/vehicule'],
];
?>