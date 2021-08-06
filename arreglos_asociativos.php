<?php
    // Los arreglos asosiativos sirven para darle un valor a los index
    $ismael = array('nombre'=>'Ismael', 'apellido' => 'Ortega', 'edad'=> 21, 'pais'=>'Mexico');
    echo $ismael['nombre'].' '. $ismael['apellido'];
    echo '<br/>' . $ismael['edad'] .','. $ismael['pais'];

    // Modificar el valor de algun elemento del arreglo
    $ismael['apellido'] = 'Estrada';
    
    echo '<br/>'.$ismael['apellido'];

?>