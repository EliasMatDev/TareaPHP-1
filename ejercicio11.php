<?php

/* Calcular la nota  promedio  de un array de estudiantes que contiene los campos
(nombre , grado y nota )  , además deberá deberá  de retornar cuantos alumnos
aprobaron y reprobaron , tome en cuenta que la nota minima para aprobar es 7,5. */
$estudiantes = array(
    array("nombre" => "Juan", "grado" => 10, "nota" => 8.5),
    array("nombre" => "María", "grado" => 9, "nota" => 7.0),
    array("nombre" => "Pedro", "grado" => 11, "nota" => 9.0),
    array("nombre" => "Ana", "grado" => 10, "nota" => 6.5)
);

$totalNotas = 0;
$numEstudiantes = count($estudiantes);
$numAprobados = 0;
$numReprobados = 0;

foreach ($estudiantes as $estudiante) {
    $totalNotas += $estudiante["nota"];

    if ($estudiante["nota"] >= 7.5) {
        $numAprobados++;
    } else {
        $numReprobados++;
    }
}

$promedio = $totalNotas / $numEstudiantes; //

echo "El promedio de las notas es: " . $promedio . "\n";
echo "Número de estudiantes aprobados: " . $numAprobados . "\n";
echo "Número de estudiantes reprobados: " . $numReprobados . "\n";
