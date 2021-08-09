<?php
if($_POST) echo $_POST['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <!-- Con $_SERVER[PHP_SELF] nos trae la ruta actual de nuestro archivo-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="">
        <input type="text" placeholder="Nombre:" name="nombre"> <br/>
        Sexo: <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer"> <br/>
        <select name="year" id="year">
            <?php 
            for($i=1960; $i<= 2020; $i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br/>
        <label for="terminos">Aceptar los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br/>
        <input type="submit" value="Enviar" >
    </form>
</body>
</html>