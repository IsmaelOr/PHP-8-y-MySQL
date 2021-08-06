<?php

// isset( ) devuelve true o false si la variable ha sido asignada.

// Sintaxis Básica de ShortHand If
#   $variable = (Condicion) ? Instrucción si se cumple : Instruccion si no se cumple;

$edad = 19;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
echo 'Edad: ' . $edad;



?>