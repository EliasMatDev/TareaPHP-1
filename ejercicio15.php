<?php
// Definir los roles y sus salarios
$roles = array(
    "Programador Jr" => 600,
    "Programador Middle" => 900,
    "Programador Sr" => 1800
);

// Definir los descuentos
$renta = 0.1; // 10%
$seguro = 0.03; // 3%
$afp = 0.07; // 7%

// Definir el número de empleados
$empleados = 10;

// Definir una variable para guardar la suma de todos los salarios
$suma = 0;

// Recorrer los roles y sus salarios
foreach ($roles as $rol => $salario) {
    // Calcular el salario líquido mensual
    $salario_liquido = $salario - ($salario * ($renta + $seguro + $afp));

    // Calcular el salario líquido anual
    $salario_anual = $salario_liquido * 12;

    // Mostrar el rol, el salario líquido mensual y el salario líquido anual
    echo "El rol de $rol tiene un salario líquido mensual de $$salario_liquido y un salario líquido anual de $$salario_anual\n";

    // Sumar el salario líquido anual a la variable de suma
    $suma += $salario_anual;
}

// Mostrar la suma de todos los salarios de los 10 empleados
echo "La suma de todos los salarios de los 10 empleados es: $$suma";
?>