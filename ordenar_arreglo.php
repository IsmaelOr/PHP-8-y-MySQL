<?php
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

// Ordenar el arreglo, si son Strings será Alfabeticamente, si son numeros sera de mayor a menor.
// Mediante sort() los ordenamos ascendentemente
sort($meses);
// Mediante rsort() lo ordenamos descendentemente
rsort($meses);

$numeros = array(1,22,10,100,20,5);
sort($numeros);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <h1>Meses del Año</h1>
    <ul>
        <?php 
        // Mediante el ciclo foreach podemos reccorer un arreglo
        foreach($meses as $mes){
            echo '<li>'. $mes. '</li>';
        }
        ?>
    </ul>
</body>
</html>