<?php

$numero = 15.785;
$numero2 = 15.18;
// round() te permite redondear un numero.
echo round($numero) . '<br/>';
echo round($numero2) . '<br/>';
echo round($numero, 1) . '<br/>';  // El segundo parametro, te sirve para indicar cuantos decimales mantener

// rand($primero, $ultimo) Te permite obtener 1 numero aleatorio entre 2 numeros
echo rand(1, 10);
echo '<br/>';

// ceil() te permite redondear un numero hacia arriba siempre
echo ceil(13.2);
echo '<br/>';
// En PHP ya hay constante predefinidias como la de PI
echo M_PI;
echo '<br/>';
?>