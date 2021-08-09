<?php
// AMBITO DE LAS VARIABLES
// Donde podemos acceder a nuestras variables y donde no podemos

// $numero = 8;

// function mostrarNumero(){
//     echo $numero;
// }

// mostrarNumero();
// Obtenemos un error ya que la variable $numero no esta declarada dentro de funcion.

$numero = 8;

function mostrarNumero($numero){
    echo $numero;
}

mostrarNumero($numero);
// De esta forma ya evitamos el error al enviarlo como parametro

?>