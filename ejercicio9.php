<?php 
// Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera: 
// Si trabaja 40 horas o menos se le paga $4 por hora. 
// Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas y $6 por cada hora extra.


$data = [
    [
        'obrero' => 'Jonh',
        'horas_trabajo' => '10',
        'horas_extras' => '0',
    ],
    [
        'obrero' => 'Antonio',
        'horas_trabajo' => '40',
        'horas_extras' => '5',
    ],
    [
        'obrero' => 'José',
        'horas_trabajo' => '40',
        'horas_extras' => '10',
    ],
];

foreach ($data as $item) {
    if($item['horas_trabajo'] == 40){     
        $pago_hora =  4;
        if($item['horas_extras'] >= 1){     
            $pago_horas_extras =  6;
        }
        else if($item['horas_extras'] < 1){     
            // Aquí estaba el error
            $pago_horas_extras = 4;
        }
    }
    else if($item['horas_trabajo'] < 40){     
        $pago_hora = 4;
		// También hay que asignar el valor correcto aquí
		$pago_horas_extras = 4;
    }

    $salario_normal = $item['horas_trabajo'] * $pago_hora;
    $salario_extras = $item['horas_extras'] * $pago_horas_extras;
    $salario_semanal = $salario_normal + $salario_extras;


    echo "########################" . "\n";
    echo "obrero: " . $item['obrero'] . "\n";
    echo "Salario por hora: $" . $pago_hora . "\n";
    echo "Horas de trabajo: " . $item['horas_trabajo'] . "\n";
    echo "Salario por horas extras: $" . $salario_extras . "\n";
    echo "Horas extras: " . $item['horas_extras'] . "\n";
    echo "Pago salario normal: $" . $salario_normal . "\n";
    echo "Pago salario total: $" . $salario_semanal . "\n";
    echo "########################" . "\n\n";
}

?>

