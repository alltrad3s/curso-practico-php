<?php

/*
+-------------------+---------------+------------------------------------------------------+
| Ejemplo           | Nombre        | Resultado                                            |
+-------------------+---------------+------------------------------------------------------+
| $valorA + $valorB | Suma          | La suma de $valorA y $valorB.                        |
| $valorA - $valorB | Resta         | La diferencia entre $valorA y $valorB.               |
| $valorA * $valorB | Multiplicación| El resultado de multiplicar $valorA y $valorB.       |
| $valorA / $valorB | División      | El cociente de la división de $valorA entre $valorB. |
| $valorA % $valorB | Módulo        | El remanente de la división de $valorA entre $valorB.|
| $valorA ** $valorB| Potenciación  | El resultado de elevar $valorA a la potencia $valorB.|
+-------------------+---------------+------------------------------------------------------+
*/

$valorA = 5; 
$valorB = 2;

$suma = $valorA + $valorB;
//kinsta@Jorge-Diaz curso-practico-php % php operadores-aritmeticos.php 
//int(7)

$resta = $valorA - $valorB;
//kinsta@Jorge-Diaz curso-practico-php % php operadores-aritmeticos.php
//int(3)

$multiplicacion = $valorA * $valorB;
//kinsta@Jorge-Diaz curso-practico-php % php operadores-aritmeticos.php
//int(10)

$division = $valorA / $valorB;
//kinsta@Jorge-Diaz curso-practico-php % php operadores-aritmeticos.php
//float(2.5)

$modulo = $valorA % $valorB;
//kinsta@Jorge-Diaz curso-practico-php % php operadores-aritmeticos.php
//int(1)

$potenciacion = $valorA ** $valorB;
//kinsta@Jorge-Diaz curso-practico-php % php operadores-aritmeticos.php
//int(25)
var_dump($potenciacion);

?>