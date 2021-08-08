<?php

$persona = array('nombre' => 'Ismael', 'edad' => 21, 'pais' => 'Mexico', 'telefono' => '5540692606');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <h1>Datos Personales</h1>
    <ul>
        <?php
            foreach ($persona as $dato => $valor) {
                echo "<li> $dato : $valor </li>";
            }
        ?>
    </ul>
</body>
</html>
