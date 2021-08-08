<?php

// Con este ciclo se pueden ejecutar las instrucciones de código, al menos una vez.
// Es empleado la mayoria de las veces para crear menus o para que el usuario ingrese una opcion.

$x = 1;

do{
    echo $x . '<br/>';
    $x++;
}while($x <= 10);

// Comprobando que se ejecuta al menos una vez
echo '<br/>';
$x = 1;

do{
    echo $x . '<br/>';
    $x++;
}while(false);


?>