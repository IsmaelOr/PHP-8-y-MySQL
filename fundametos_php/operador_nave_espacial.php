<?php


// Operador de nave espacial:  <=>
// Se compara si numero1 es mayor, igual, menor a numero2;
// REGRESA 1 si el valor de la izquierda es mayor que el valor de la derecha
// REGRESA 0 si los valores en ambos lados son iguales
// REGRESA -1 si el valor de la derecha es mayor que el de la izquierda

echo  1 <=> 1;
echo '<br/>';
echo 10 <=> 2;
echo '<br/>';
echo 2 <=> 12;
echo '<br/>';

function comparar($a,$b){
    return $a <=> $b;
}

$arreglo = array(3,1,5,2,4);

// usort() permite pasarle un arreglo y pasarle una funcion con que quiere que la ordene
usort($arreglo, 'comparar');

//sort($arreglo);
echo implode(' - ', $arreglo);
?>