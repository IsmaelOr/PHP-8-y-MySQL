<?php
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

// count() devuelve el numero de valores que hay dentro de un arreglo
echo 'Total de meses: '.count($meses) . '<br/>';
$ultimo_mes = count($meses) - 1;
echo 'Ultimo mes: '. $meses[$ultimo_mes];
?>