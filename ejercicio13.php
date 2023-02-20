<?php
echo "Ingrese el número de horas trabajadas: ";
$horas = readline();

$salario = ($horas <= 40) ? ($horas * 4) : ((40 * 4) + (($horas - 40) * 6));


echo "El salario base es: $4 por hora" . "\n";
echo "El número de horas trabajadas es: $horas" . "\n";
echo "El salario semanal es: $salario";
?>