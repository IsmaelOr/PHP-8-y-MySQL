<?php

// Las declaraciones de tipo escalar, sirven para indicar especificamente que tipo de dato es el que va a recibir
// en cada uno de los parametros la funcion.
declare(strict_types=1);
function cuadrado(int $numero){
    return $numero * $numero;
}

$numero = 20;
echo 'El cuadrado de ' . $numero . ' es: ' . cuadrado($numero);

?>