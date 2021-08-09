<?php

$persona = array('nombre' => 'Ismael', 'telefono' => '5540692606', 'edad' => 21, 'pais' => 'Mexico');

// extract() nos permite extraer los elementos de un arreglo asociativo como si fueran variables
extract($persona);

echo $telefono . '<br/>';
echo $nombre . '<br/>';
echo $pais . '<br/>';
echo $edad . '<br/>';


$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

// array_pop() te permite extraer el ultimo elemento de un arreglo y lo elimina del arreglo

$ultimo_dia = array_pop($semana);
echo $ultimo_dia . '<br/>';

foreach ($semana as $dia) {
    echo $dia. '<br/>';
}

// array_push() te permite agregar un elemento al final del arreglo.
array_push($semana, 'Domingo');


// join(', ', $semana) sirve para separar cada uno de los elementos por el caracter qeu seleccionemos.
echo join(' - ', $semana);
echo '<br/>';
echo join('<br/>', $semana);
echo '<br/>';

// count() sirve para saber cuantos elementos tiene un arreglo
echo count($semana);
echo '<br/>';

// Ordenar un arreglo ascendente y descendente
sort($semana);
rsort($semana);

// array_reverse() Sirve para invertir un arreglo (el primero sera el ultimo y el ultimo el primero)
array_reverse($semana);
echo join('<br/>', $semana);

?>