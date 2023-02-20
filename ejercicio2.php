<?php


$compras = [3, 5, 2, 4, 1, 6, 2, 3, 4, 5];


for ($i = 0; $i < 10; $i++) {

    $llantas = $compras[$i];

    $precio_unitario = ($llantas >= 4) ? 60 : 80;

    $total = $llantas * $precio_unitario;

    echo "Cliente " . ($i + 1) . ": $" . $total . "\n";
}

?>