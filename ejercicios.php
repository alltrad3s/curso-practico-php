<?php

//Arbolito de navidad
function medioarbol($pisos) {
    for ($i = 0; $i <= $pisos; $i++) {
        echo str_repeat("*", $i) . "\n";
    }
}

medioarbol(10);
echo "\n\n";

//Ejercicio con condicion
function ubicacionJuguetes($edad) {
    if (is_null($edad)) {
        return "El estudiante no identificado tendrá sus juguetes en la bodega de al lado.";
    } elseif ($edad < 5) {
        return "El estudiante con $edad años tendrá sus juguetes en la parte inferior de la bodega.";
    } elseif ($edad >= 5 && $edad <= 7) {
        return "El estudiante con $edad años tendrá sus juguetes en la parte media de la bodega.";
    } else {
        return "El estudiante con $edad años tendrá sus juguetes en la parte alta de la bodega.";
    }
}

// Ejemplos de uso:
echo ubicacionJuguetes(4) . "\n";
echo ubicacionJuguetes(6) . "\n";
echo ubicacionJuguetes(10) . "\n";
echo ubicacionJuguetes(null) . "\n"; // Para el caso de edad no registrada