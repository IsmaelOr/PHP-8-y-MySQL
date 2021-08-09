<?php
// la funcion die() nos sirve cuando queremos probar ciertas cosas en nuestro código.
// Ya que para la ejecucion de la pagina por completo cuando llega a ella.

echo "Soy un echo";
die();
// Con esto hacemos que ya no se ejecute el codigo que este por debajo

// Tambien podemos usarla si la conexion a una base de datos falla, entonces parar todo para evitar problemas con la seguridad
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo</h1>
</body>
</html>