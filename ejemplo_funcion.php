<?php

    function area_triangulo($base, $altura){
        return ($base * $altura) / 2;
    }

    $resultado = area_triangulo(10,10);
    echo 'El area del Triangulo es: ' . $resultado . ' metros cuadrados';

?>