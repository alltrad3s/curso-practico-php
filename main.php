<?php
// Linea va con index.html
//print_r($_REQUEST);

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");
$form = "<form action='analisis.php'>";

//Se elimina la siguiente linea
//$palabraDesordenadas = array();

for($i = 0; $i < count($palabras); $i++) {
    $form .= "La palabra: " .str_shuffle($palabras[$i]). " " . 
    "<input type='text' name='palabra".$i."'>". 
    "<br>";
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";

echo $form.$button.$formCierre;