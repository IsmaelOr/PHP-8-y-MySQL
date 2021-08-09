<?php
// Arreglos dentro de un Arreglo

$amigos = array(array('nombre' => 'Axel', 'edad' => 21),array('nombre'=>'Odette', 'edad' => 20));

echo $amigos[0]['nombre'] . ' '.$amigos[0]['edad'] .'<br/>' ;
echo $amigos[1]['nombre'] . '<br/>';


?>