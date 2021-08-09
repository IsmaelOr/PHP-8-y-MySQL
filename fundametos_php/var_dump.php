<?php

$texto = 'Ismael';
$numero = 10;
$numero2 = '5';
$decimal = 1.15;
$arreglo = array('Ismael', 'Diego', 'Matias');
$arreglo_asociativo = array('nombre'=>'Ismael', 'edad' => 21);
$boleano = false;

// var_dump() nos permite conocer el tipo de dato y ver los valores que contienen esas variables.
// Tambien es util con funciones.

var_dump($texto);
echo '<br/>';
var_dump($numero);
echo '<br/>';
var_dump($numero2);
echo '<br/>';
var_dump($decimal);
echo '<br/>';
// Con las etiquetas <pre> </pre> le damos formato a la presentación de var_dump() para que sea mas legible
echo '<pre>';
var_dump($arreglo);
echo '</pre>';
echo '<br/>';
var_dump($arreglo_asociativo);
echo '<br/>';
var_dump($boleano);





?>