<?php

/*
+---------------------------+-------+-------------------------------------------------+
| Ejemplo                   | Nombre| Resultado                                       |
+---------------------------+-------+-------------------------------------------------+
| $valorA and $valorB       | and   | true si $valorA y $valorB son true.             |
| $valorA or $valorB        | or    | true si $valorA o $valorB son true.             |
| $valorA xor $valorB       | xor   | true si uno de $valorA o $valorB es true,       |
|                           |       | pero no ambos.                                  |
| !$valorA                  | not   | true si $valorA es false.                       |
| $valorA && $valorB        | &&    | true si $valorA y $valorB son true.             |
| $valorA || $valorB        | ||    | true si $valorA o $valorB son true.             |
+---------------------------+-------+-------------------------------------------------+
*/

$valorA = true;
$valorB = true;

$resultado = $valorA and $valorB;

var_dump($resultado);

?>