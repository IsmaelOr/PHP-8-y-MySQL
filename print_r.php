<?php

$texto = 'Ismael';
$numero = 10;
$numero2 = '5';
$decimal = 1.15;
$arreglo = array('Ismael', 'Diego', 'Matias');
$arreglo_asociativo = array('nombre'=>'Ismael', 'edad' => 21);
$boleano = false;

// print_r() te permite hacer algo similar a var_dump() pero tiene unas diferencias
// print_r() solo te da la información necesaria para nosotros.
// print_r() sirve más para conocer los arreglos.
print_r($texto);
echo '<br/>';
print_r($numero);
echo '<br/>';
print_r($numero2);
echo '<br/>';
print_r($decimal);
echo '<br/>';
echo '<pre>';
print_r($arreglo);
echo '</pre>';
echo '<br/>';
print_r($arreglo_asociativo);
echo '<br/>';
print_r($boleano);

?>