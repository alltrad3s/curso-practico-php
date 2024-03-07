<?php 

function calcularDescuento($precioOriginal) {
    // Calcular el valor del descuento (35% del precio original)
    $valorDescuento = $precioOriginal * 0.35;
    
    // Calcular el nuevo precio después del descuento
    $nuevoPrecio = $precioOriginal - $valorDescuento;
    
    // Imprimir el precio original y el nuevo precio
    echo "Precio Original: $" . number_format($precioOriginal, 2) . "\n";
    echo "Nuevo Precio con Descuento: $" . number_format($nuevoPrecio, 2) . "\n";
}

// Ejemplo de uso
calcularDescuento(100); // Suponiendo que el precio original del producto es $100

/* EJEMPLO CON RETURN
function calcularDescuento($precioOriginal) {
    $valorDescuento = $precioOriginal * 0.35;
    $nuevoPrecio = $precioOriginal - $valorDescuento;
    
    // Retorna un array asociativo con el precio original y el nuevo precio
    return [
        'precioOriginal' => $precioOriginal,
        'nuevoPrecio' => $nuevoPrecio
    ];
}

// Llamada a la función y almacenamiento de los valores retornados
$resultado = calcularDescuento(100);

// Ahora puedes decidir qué hacer con los valores retornados, por ejemplo, imprimirlos
echo "Precio Original: $" . number_format($resultado['precioOriginal'], 2) . "\n";
echo "Nuevo Precio con Descuento: $" . number_format($resultado['nuevoPrecio'], 2) . "\n";

*/