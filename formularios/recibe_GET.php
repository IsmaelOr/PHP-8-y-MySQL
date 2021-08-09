<?php
// RECIBIR PARAMETROS POR MEDIO DE GET
# Este metodo nos permite recibir todos los parametros por medio de la URL.
# El meotodo GET se puede utilizar con información que no sea delicada
# Por lo regular cuando queremos traer informacion y mostrarla.

// print_r($_GET);
if(!$_GET){
    header('Location: index.php');
}else{
    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $year = $_GET['year'];
    $terminos = $_GET['terminos'];
    echo ($nombre) ? htmlspecialchars($nombre) . '<br/>' : 'El usuario no ingreso su nombre';
    echo htmlspecialchars($sexo) . '<br/>';
    echo htmlspecialchars($year) . '<br/>';
    echo htmlspecialchars($terminos) . '<br/>';
}




?>