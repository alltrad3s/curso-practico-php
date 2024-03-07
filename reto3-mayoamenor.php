<?php

function ordenarProductosPorTamaño(array $productos) {
    // Ordena los productos de mayor a menor basándose en el tamaño (ancho * alto)
    usort($productos, function($a, $b) {
        $tamañoA = $a['ancho'] * $a['alto'];
        $tamañoB = $b['ancho'] * $b['alto'];
        return $tamañoB <=> $tamañoA; // Nota el cambio para ordenar de mayor a menor
    });
    
    return $productos;
}

$productos = [
    ['ancho' => 30, 'alto' => 20],
    ['ancho' => 10, 'alto' => 10],
    ['ancho' => 20, 'alto' => 15],
    ['ancho' => 25, 'alto' => 30],
];

$productosOrdenados = ordenarProductosPorTamaño($productos);

// Imprimir los productos ordenados para verificar
foreach ($productosOrdenados as $producto) {
    echo "Producto - Ancho: {$producto['ancho']}, Alto: {$producto['alto']}, Tamaño: " . ($producto['ancho'] * $producto['alto']) . "\n";
}