<?php
    // Estas son funciones que nos otorga php
#   count();
#    sort();
#    rsort();
#    var_dump();
#    print_r();

    // Las funciones nos ayudan a que cuando tengamos que repetir unas operaciones muchas veces
    // No tengamos que repetir código


    // Creamos la función
    function saludo(){
        echo "Saludo" . '<br/>';
    }

    // Invocamos/Llamamos a la función
    saludo();

    function elevar_al_cuadrado($numero){
        return $numero * $numero;
    }

    echo elevar_al_cuadrado(10) . '<br/>';
    echo elevar_al_cuadrado(2) . '<br/>';
    echo elevar_al_cuadrado(3) . '<br/>';


    function sumar($numero, $numero2){
        return $numero + $numero2;
    }
    // Se puede guardar el return de una función dentro de una variable

    $resultado = sumar(10, 5);
    echo $resultado;
?>