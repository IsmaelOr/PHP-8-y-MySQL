<?php

// Declaración de un arreglo
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril'];
$arreglo = array('cadena de texto', 1, array('Hola', 'Usuario'), true);
// Acceder a un valor del arreglo
echo $semana[0].'<br/>';
echo $semana[6].'<br/>';
echo $meses[2].'<br/>';
//Modificar el valor de alguna posicion en el arreglo
$semana[7] = 'Inventado';
echo $semana[7].'<br/>';

// Acceder a un arreglo dentro de otro arreglo
echo $arreglo[2][1];

?>