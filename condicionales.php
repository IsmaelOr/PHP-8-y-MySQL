<?php
/*  SINTAXIS BÁSICA
if(condicion){
    // Instrucciones
} else{

}
*/

$edad = 21;

// Operadores de comparación
#   == Igualdad, 
#   === Identico
#    < Menor que, 
#    > Mayor que,
#   <=  Menor o igual que, 
#   >=  Mayor o igual que,
#   != Diferente que
#    ! Negación

$nombre = 'Ismael';

// Operadores lógicos
#  && o and     AND Evalua que se cumplan las 2 condiciones
# || o or       OR  Evalua que se cumpla al menos una condicion
# xor           XOR Evalua que se cumpla una y solo una condicion


if($edad >= 18  && $nombre == 'Ismael'){
    echo '<h2>' . $nombre .' es mayor de Edad</h2>';
}elseif($nombre == 'Ismael'){
    echo "<h2> $nombre es menor de edad</h2>";
}elseif($edad >= 18){
    echo "<h2>El usuario es mayor de edad</h2>";
}
else{
    echo "<h2>El usuario es menor de edad</h2>";
}

?>