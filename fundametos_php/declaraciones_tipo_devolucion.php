<?php

declare(strict_types=1);
// Declaraciones de tipo devolucion sirve para indicarle a una funcion, obligatoriamente el tipo de dato que va a devolver

function obtenerEdad() : int{
    $edad = 23;
    return $edad;
}

echo obtenerEdad();



?>