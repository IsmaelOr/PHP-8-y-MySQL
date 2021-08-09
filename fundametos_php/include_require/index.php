<?php
// LOGICA DEL PROGRAMA
function suma($numero1, $numero2){
    return $numero1+$numero2;
}

// Include nos permite traer codigo de otros archivos, para colocarlos enseguida, si algo falla, solo no se pone y continua con el resto
include 'vista.php';

// Require nos permite traer codigo de otro archivo, pero si algo falla, no permite mostrar nada que este despues.
require 'vista.php';

// include_once 'archivo.php'   Solo nos deja llamar una vez este archivo, para controlar repeticiones.
include_once 'vista.php';
require_once 'vista.php';

?>