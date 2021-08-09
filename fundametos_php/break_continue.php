<?php

$paises = array('Mexico', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela', 'Guatemala');

// La sentencia break te permite detener el código en cualquier momento

foreach($paises as $pais){
    echo $pais . '<br/>';

    if($pais == 'España'){
        break;
    }
}

// La sentencia continue te permite saltarte esa iteracion y continuar con la siguiente.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises Latinoamericanos</title>
</head>
<body>
    <h1>Paises Latinoamericanos</h1>
    <?php 
        foreach ($paises as $pais) {
            if($pais == 'España'){
                continue;
            }
            echo $pais . '<br/>';
        }
    ?>
</body>
</html>