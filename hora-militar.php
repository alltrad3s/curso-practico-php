<?php

//Solucion Simple
// Hora de entrada en formato 12 horas con AM/PM
$horaEntrada = "07:05:45 PM";

// Convertir a formato de 24 horas (formato militar)
$horaFormatoMilitar = date("H:i:s", strtotime($horaEntrada));

echo "Solucion simple\n";
echo "Hora en formato militar: " . $horaFormatoMilitar . "\n";
echo "\n";

//Solucion Estructurada
function convertirHoraAMPMaMilitar($horaAMPM) {
    // Dividir la cadena de hora en componentes
    list($hora, $minuto, $segundo, $meridiano) = sscanf($horaAMPM, "%d:%d:%d %s");

    // Convertir la hora a formato militar
    if ($meridiano == 'PM' && $hora < 12) {
        $hora += 12;
    } else if ($meridiano == 'AM' && $hora == 12) {
        $hora = 0;
    }

    // Asegurarse de que la hora tenga dos dígitos
    $horaFormateada = sprintf('%02d', $hora);

    // Construir y devolver la cadena de hora en formato militar
    return $horaFormateada . ':' . sprintf('%02d', $minuto) . ':' . sprintf('%02d', $segundo);
}

// Ejemplo de uso
echo "Solucion estructurada\n";
echo "Hora en formato militar: " . convertirHoraAMPMaMilitar($horaEntrada). "\n";
echo "\n"; // Salida: 19:05:45
echo "\n";