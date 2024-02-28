<?php

//echo max(9,4,3,2,6);
//echo min(9,4,3,2,6);
//echo sqrt(4);

//generar números aleatoreos
//echo rand(40, 100);

//Ejercicio
// Función para calcular la distancia euclidiana entre dos puntos
function calcularDistanciaEuclidiana($x1, $y1, $x2, $y2) {
    $distanciaX = $x2 - $x1;
    $distanciaY = $y2 - $y1;
    
    // Elevar al cuadrado las distancias y sumarlas
    $sumaCuadrados = pow($distanciaX, 2) + pow($distanciaY, 2);
    
    // Calcular la raíz cuadrada del resultado para obtener la distancia euclidiana
    $distanciaEuclidiana = sqrt($sumaCuadrados);
    
    return $distanciaEuclidiana;
}

// Coordenadas de los puntos A y B
$x1 = 3;
$y1 = 4;
$x2 = 6;
$y2 = 8;

// Llamada a la función y muestra del resultado
$distancia = calcularDistanciaEuclidiana($x1, $y1, $x2, $y2);
echo "La distancia entre el punto A ($x1, $y1) y el punto B ($x2, $y2) es: $distancia";

?>