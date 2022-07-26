<?php 
$gatos_felinos=true;
$gatos_4_patas=true;
$gatos_vuelan=false;
$gatos_programan=false;

// And
var_dump($gatos_felinos && $gatos_4_patas); // True
var_dump($gatos_vuelan && $gatos_4_patas); // False 

// Or
var_dump($gatos_4_patas || $gatos_vuelan); // True
var_dump($gatos_programan || $gatos_vuelan); // False

// Not
var_dump(!$gatos_4_patas); // False
var_dump(!$gatos_programan); // True

// Test
$resultado=$gatos_4_patas and $gatos_programan; // True por el operador AND
var_dump($resultado);

echo "\n";