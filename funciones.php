<?php 

/*
$nombre = "Camila";
$apellido = "Rojas";

echo $nombre.' '.$apellido;
*/

function concatenar($nombre, $apellido) {
    echo $nombre.' '.$apellido;
}

concatenar("Camila", "Rojas");

function sumNumbers($numbersArray)
{
    $sum = 0;
    $arrayLength = count($numbersArray);
    for($i=0; $i<$arrayLength; $i++){
        $sum = $sum + $numbersArray[$i];
    }
    return $sum;
}

$numbersArray = [1,2,7,5,4];
echo "\n";
echo "La suma de los valores del array es: "
. sumNumbers($numbersArray);
echo "\n";

$names = ['Ana', 'Juan', 'Camila'];

//is_array($array); sirve para ver si es array
var_dump(is_array($names));
?>