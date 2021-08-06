<?php

$opcion = 2;

switch ($opcion) {
    case 1:
        echo "Estas en el caso 1";
        break;
    case 2:
        echo "Estas en el caso 2";
        break;
    default:
        echo "Estas en un caso no definido";
        break;
}

echo '<br/>';

$mes = 'Diciembre';

switch ($mes) {
    case 'Diciembre':
        echo "Feliz Navidad";
        break;
    case 'Enero':
        echo "Feliz Año nuevo";
        break;
    default:
        echo "Estas en un caso no definido";
        break;
}


?>