<?php

// agregar y eliminar un valor a un arreglo
$frutas = array("manzana", "banana", "fresa");
array_push($frutas, "uvas", "pera", "papaya");

$canasta = array_search("banana", $frutas );

array_splice($frutas, $canasta, 1);

foreach ($frutas as $fruta) {
    echo $fruta . " ";
}

?>