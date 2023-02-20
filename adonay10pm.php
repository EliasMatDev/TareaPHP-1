<?php
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
    
    if ($años_de_servicio >= 1 && $años_de_servicio < 5) {
        $aumento = 25;

    } else if ($años_de_servicio >= 5 && $años_de_servicio < 10) {
        $aumento = 50;

    } else if ($años_de_servicio >= 10 && $años_de_servicio < 20) {
        $aumento = 100;

    } else if ($años_de_servicio >= 20) {
        $aumento = 150;
    }

    $nuevo_salario = $salario + $aumento;


    echo "Empleado: "  . $nombre . "\n";
    echo "Salario actual: " . $salario . "\n";
    echo "Aumento: " . $aumento . "\n";
    echo "Nuevo salario: " . $nuevo_salario . "\n";
    echo "------------------------------\n";
}

?>