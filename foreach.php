<?php
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];




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