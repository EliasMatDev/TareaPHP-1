<?php
function heckerheight($arreglo1){
    $arreglo2 = $arreglo1;
    sort($arreglo2);

    print_r($arreglo2);
    print_r($arreglo1);
    $counter = 0;

    for ($i = 0; $i < count($arreglo1); $i++) {
        if ($arreglo2[$i] !== $arreglo1[$i]) {
            $counter++;
        }
    }
    echo $counter;
}

heckerheight([1,1,4,2,1,3]);

?>
