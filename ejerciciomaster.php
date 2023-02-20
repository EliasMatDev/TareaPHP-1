<?php

function decodificarCadena($cadena, $buscar) {
    $cadenaPrincipal = str_split($cadena);
    $buscarCadena = str_split($buscar);
    $resultadoCadena = strpos($cadena, $buscar);

    $contador = 0;

    if ($resultadoCadena !== false) {
        foreach ($cadenaPrincipal as $letra) {
            if ($letra === $buscarCadena[$contador]) {
                if ($contador < count($buscarCadena) - 1) {
                    $contador += 1;
                }
                continue;
            } else if ($contador < count($buscarCadena) - 1) {
                $cadena = substr_replace($cadena, "", 0, $contador + 1);
                $contador = 0;
                echo "[ $cadena ]". "\n";
            } else {
                $cadena = substr_replace($cadena, "", $contador + 1);
                return [$cadena, $resultadoCadena];
            }
        }
    } else {
        return false;
    }
}

$cadena = "QWQDPNQWSOSQWDNKD";

$resultado = decodificarCadena($cadena, "SOS");
if (!$resultado) {
    echo "La subcadena no se encontró\n";
} else {
    echo "La cadena [" . $resultado[0] . "] fue encontrada en la posición => [" . $resultado[1] . "]\n";
}

?>


