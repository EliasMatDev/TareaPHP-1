<?php

function calcular_nuevo_salario($salario, $años_de_servicio) {

    $aumentos = array(25, 50, 100, 150);
    $rangos = array(
        array(1, 5),
        array(5, 10),
        array(10, 20),
        array(20, INF)
    );

    $aumento = 0;

    foreach ($rangos as $rango) {
        $min = $rango[0];
        $max = $rango[1];
        if ($años_de_servicio >= $min && $años_de_servicio < $max) {

            $indice = array_search($rango, $rangos);

            $aumento = $aumentos[$indice];

            break;
        }
    }

    return $salario + $aumento;
}

$empleados = array(
    array("Nombre" => "Adonay", "años_de_servicio" => 1),
    array("Nombre" => "Oscar", "años_de_servicio" => 6),
    array("Nombre" => "Pablo", "años_de_servicio" => 10),
    array("Nombre" => "Aniceto", "años_de_servicio" => 20),
);

$salario = 365;

foreach ($empleados as $empleado) {
    $nombre = $empleado["Nombre"];
    $años_de_servicio = $empleado["años_de_servicio"];

    $nuevo_salario = calcular_nuevo_salario($salario, $años_de_servicio);

    echo "Empleado: "  . $nombre . "\n";
    echo "Salario actual: $" . $salario . "\n";
    echo "Aumento: $" . ($nuevo_salario - $salario) . "\n";
    echo "Nuevo salario: $" . $nuevo_salario . "\n";
    echo "------------------------------\n";
}