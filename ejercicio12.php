<?php

echo "Bienvenido a la calculadora de propinas.\n";
echo "Por favor ingrese el total de la cuenta: ";
$pago = trim(fgets(STDIN));
echo "Por favor ingrese la calidad del servicio (excelente, bueno, regular, malo): ";
$calidadServicio = trim(fgets(STDIN));

$porcentajePropinaExcelente = 0.20;
$porcentajePropinaBueno = 0.15;
$porcentajePropinaRegular = 0.10;
$porcentajePropinaMalo = 0.05;

switch ($calidadServicio) {
    case "excelente":
        $propina = $pago * $porcentajePropinaExcelente;
        break;
    case "bueno":
        $propina = $pago * $porcentajePropinaBueno;
        break;
    case "regular":
        $propina = $pago * $porcentajePropinaRegular;
        break;
    case "malo":
        $propina = $pago * $porcentajePropinaMalo;
        break;
    default:
        $propina = 0;
        break;
}

$total = $pago + $propina;

echo "El total de la cuenta es $" . $pago . ", la propina recomendada es $" . $propina . " y el total con propina es $" . $total . ".\n";
