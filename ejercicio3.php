<?php
$n = readline("Ingrese el número de ventas: ");
$ventas_menor_igual_400 = 0;
$ventas_entre_400_y_800 = 0;
$ventas_mayor_igual_800 = 0;

for ($i = 0; $i < $n; $i++) {
    $venta = readline("Ingrese el valor de la venta " . ($i+1) . ": ");
    if ($venta <= 400) {
        $ventas_menor_igual_400++;
    } elseif ($venta < 800) {
        $ventas_entre_400_y_800++;
    } else {
        $ventas_mayor_igual_800++;
    }
}

echo "Ventas de $400 o menos: $ventas_menor_igual_400\n";
echo "Ventas mayores a $400 pero inferiores a $800: $ventas_entre_400_y_800\n";
echo "Ventas de $800 o más: $ventas_mayor_igual_800\n";
?>