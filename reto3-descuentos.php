<?php 

function Descontar($precioOriginal, $descuentoPorcentaje) {
  return $precioOriginal - ($precioOriginal * $descuentoPorcentaje / 100);
}

$precio = 299;
$descuento = 35;

echo "Precio original: $$precio<br>";

echo "Descuento: $descuento%<br><br>";

$precioConDescuento = Descontar($precio, $descuento);

echo "Precio con descuento: $$precioConDescuento<br>";

echo "Ahorras: $" . ($precio - $precioConDescuento) . "<br>";