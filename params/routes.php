<?php
// tableau des routes 
$routes = [
  ['path' => '/', 'ctrl' => 'IndexControler/index'],
  ['path' => '/contact', 'ctrl' => 'IndexControler/contact'],
  ['path' => '/util', 'ctrl' => 'IndexControler/util'],
  ['path' => '/login', 'ctrl' => 'SecurityControler/login'],
  ['path' => '/vehicules', 'ctrl' => 'indexControler/vehicules'],
  ['path' => '/vehicule', 'ctrl' => 'indexControler/vehicule'],
  ['path' => '/rest', 'ctrl' => 'indexControler/rest1'],
  ['path' => '/rest2', 'ctrl' => 'indexControler/rest2'],
];
?>