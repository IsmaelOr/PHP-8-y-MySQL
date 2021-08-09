<?php
// RECIBIR PARAMETROS POR MEDIO DE POST
// El metodo POST manda los parametros por atrás de todo, sirve para enviar información personal o algo que no queremos que se muestre.
// Los envia "Por detras del navegador" osea que no los enviar por medio de la URL.

//print_r($_POST);

if(!$_POST){
    header('Location: index.php');
}else{
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];

    echo 'Hola ' . $nombre . ' naciste en el año ' . $year; 
}
?>