<?php
    // Comprobar que realmente este llegando por el metodo especificado
    # $_SERVER['REQUEST_METHOD'] contiene el metodo que esta recibiendo
    # Esta sirve para solo un formulario 
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "Se enviaron por GET";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Se enviaron por POST";
    }

    // ESTE SIRVE PARA COMPROBAR POR QUE FORMULARIO FUE ENVIADO, DADO QUE TUVIERAMOS DOS FORMILARIOS
    if(isset($_POST['submit-formulario1'])){
        echo "Se han recibido los datos";
        print_r($_POST['submit']);
    }
?>