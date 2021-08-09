<?php
    // una variable es un contenedor para algo que queramos guardar
    // las variables son sensibles a mayusculas y minusculas en PHP
    // las variables no pueden empezar con numeros, no pueden tener espacios y no debe de llevar caracteres especiales
    // Tipos de Datos
    # String: Cadena de texto
    $nombre = "Ismael";
    # Integer: Numeros enteros
    $numero = 13;
    # Double: Numeros decimales
    $numero_decimal= 7.7;
    #Boolean: Verdadero o Falso (true/false)
    $var_boolean = true;
    #Array: Arreglo
    #Object: Objeto
    #Class: Clase
    #Null: Cuando a una variable aun no se le ha asigando un valor

    // Comillas sencillas vs Comillas Dobles
    # En las comillas dobles podemos llamar variables, mientras que en las sencillas no.
    # Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad

    echo "$nombre, $numero, $numero_decimal, $var_boolean <br/>";
    echo $nombre . ',' . $numero . ',' . $numero_decimal. '<br/>';

    # Conocer el tipo de dato que tiene una variable
    echo gettype($nombre);
?>