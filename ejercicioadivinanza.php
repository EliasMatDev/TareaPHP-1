<?php

$numeroRandom = rand(1, 20);
$numeroIntentos = 0;
do{
    $numeroUsuario = readline("Ingrese un numero entre 1 y 20: ");
    if($numeroUsuario > $numeroRandom){
        echo "El numero ingresado es mayor al numero random" . PHP_EOL;
    }else if($numeroUsuario < $numeroRandom){
        echo "El numero ingresado es menor al numero random" . PHP_EOL;
    }
    $numeroIntentos++;
}while($numeroUsuario != $numeroRandom);

echo "Felicitaciones, adivinaste el numero random en $numeroIntentos intentos." . PHP_EOL;

?>