<?php
$roles = array(
    "Programador Jr" => 600,
    "Programador Middle" => 900,
    "Programador Sr" => 1800
);

$renta = 0.1;
$seguro = 0.03;
$afp = 0.07; 

$empleados = 10;
$suma = 0;

foreach ($roles as $rol => $salario) {
    $salario_liquido = ($renta + $seguro + $afp) ? $salario - ($salario * ($renta + $seguro + $afp)) : $salario;
    $salario_anual = $salario_liquido * 12;

    echo "El => [$rol] tiene un salario líquido mensual de: [ $$salario_liquido]\n";
    echo "Y un salario líquido anual de: [ $$salario_anual]\n";
    echo "------------------------------\n";
    $suma += $salario_anual;
}

echo "La suma de todos los salarios de los 10 empleados es: [ $$suma]";
?>