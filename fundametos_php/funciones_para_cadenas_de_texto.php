<?php
    // Estas son muchas de las funciones que PHP ya tiene incluidas para trabajar con cadenas de Texto.

    // htmlspecialchars() Nos permite convertir caracteres especiales, en entidades HTML
    // Sirve para que los Usuarios no puedan inyectar código por medio de formularios
    $texto = '< > & "" ';
    echo htmlspecialchars($texto) . '<br/>';

    // trim() elimina todos los espacios en blanco al incio y al final de una cadena de texto
    $mensaje = '     Prueba de texto    ';
    echo trim($mensaje) . '<br/>';

    // strlen() nos regresa el numero de caracteres que tiene una cadena de texto
    $nombre = 'Ismael Ortega Estrada';
    echo strlen($nombre) . '<br/>';

    // substr($texto, caracter_inicial, longitud) trae una fragmento de una cadena de texto, trae la cantidad de caracteres dados por le parametro longitud
    echo substr($nombre, 0, 6) . '<br/>';

    // strtoupper() convierte todos los caracteres de la cadena de texto en MAYUSCULAS
    echo strtoupper($nombre) . '<br/>';

    // strtolower() convierte todos los caracteres de la cadena de texto en minusculas
    echo strtolower($nombre) . '<br/>';

    // Encontrar la posicion de algun caracter en una cadena de texto
    echo strpos($nombre, 'r');
?>