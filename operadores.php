<?php
/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División
%   Modulo

-- */

$numero = 10;
$numero2 = 5;

$resultado = $numero + $numero2;
echo $resultado .'<br/>';

$resultado = $numero - $numero2;
echo $resultado .'<br/>';

$resultado = $numero * $numero2;
echo $resultado .'<br/>';

$resultado = $numero / $numero2;
echo $resultado .'<br/>';

$resultado = $numero % $numero2;
echo $resultado .'<br/>';

/* Operadores de Asignación:

=
+=
-=
*=
/=

-- */
echo '<br/>';


$numero3 = 2;
$numero4 = 7;
$resultado2 = 5;

// $resultado2 = $resultado2 + $numero3;
$resultado2 += $numero3;
echo $resultado2 .'<br/>';

// $resultado2 = $resultado2 - $numero3;
$resultado2 -= $numero3;
echo $resultado2 .'<br/>';

// $resultado2 = $resultado2 * $numero3;
$resultado2 *= $numero3;
echo $resultado2 .'<br/>';

// $resultado2 = $resultado2 / $numero3;
$resultado2 /= $numero3;
echo $resultado2 .'<br/>';

/* Operadores de Incremento / Decremento:

++$x
$x++
--$x
$x--

-- */

echo '<br/>';

$incremento = 0;
$decremento = 10;

// $incremento = $incremento + 1;
echo ++$incremento . '<br/>';

echo $incremento++ . '<br/>';
echo $incremento . '<br/>';

echo --$decremento . '<br/>';
echo $decremento-- . '<br/>';
echo $decremento . '<br/>';



/* Operadores de Cadenas:
.
.=

-- */
echo '<br/>';

$cadena = "Hola " . "Usuario";
echo $cadena . '<br/>';

$cadena .= " Bonita Tarde";
echo $cadena . '<br/>';


?>