<?php

function fizzBuzz($numero){
    $arreglo = [];
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            array_push($arreglo, "FizzBuzz");
        } else if ($i % 3 == 0) {
            array_push ($arreglo, "Fizz");
        } else if ($i % 5 == 0) {
            array_push ($arreglo, "Buzz");
        } else {
            array_push ($arreglo, $i);
        }
    }
}

fizzBuzz(15);

?>