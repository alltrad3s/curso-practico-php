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