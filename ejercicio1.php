<?php
$empleados = [
    array( "nombre" => "Adonay", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Samuel", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Miguel", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Pepe", "turno" => "Nocturno", "domingo" => true),
    array( "nombre" => "Oscar", "turno" => "Nocturno", "domingo" => true),
];

foreach ($empleados as $empleado) {
    $tarifa = $empleado["domingo"] ? ($empleado["turno"] == "nocturno" ? 10 : 20) : ($empleado ["turno"] == "diurno" ? 5 : 10);
    $salario = 8 * $tarifa;

    echo "Nombre: " . $empleado["nombre"] . "\n";
    echo "Turno: " . $empleado["turno"] . "\n";
    echo "Domingo: " . ($empleado["domingo"] ? "Si" : "No") . "\n";
    echo "Salario diario: $" . $salario . "\n\n";
}

?>
