<?php

    /*
    Crea un array asociativo de 4 elementos cuya clave será un tipo de mueble:
    armario, mesa,... y valor el peso del mueble.

    Recórrelo mostrando claves y valores, guardándolos en dos arrays simples en el recorrido.
    Ordena el array por peso.

    Hecho esto, crea otro array asociativo, donde guardes los mismos datos pero en orden inverso del siguiente modo: sacando los datos del primero (empezando por el último dato) y metiéndolo en el segundo.

    Muestra los resultados del segundo
    */

    // Declaración de arrays
    $claves = [];
    $valores = [];
    $muebles = [
        'armario' => 24,
        'mesa' => 20,
        'silla' => 5,
        'sofa' => 30,
    ];

    // Recorremos el array de muebles
    foreach ($muebles as $mueble => $peso) {
        
        // Guardamos los muebles en otro array asociativo
        array_push($claves, $mueble);

        // Guardamos los pesos en otro array asociativo
        array_push($valores, $peso);
    }

    // Ordenamos el array por peso (valores)
    asort($muebles);

    // Creamos un nuevo array asociativo con los datos en orden inverso
    $mueblesInvertidos = [];
    foreach (array_reverse($muebles, true) as $mueble => $peso) {
        $mueblesInvertidos[$mueble] = $peso;
    }

    // Mostramos los resultados del array invertido
    echo "Array invertido:\n";
    foreach ($mueblesInvertidos as $mueble => $peso) {
        echo $mueble . ": " . $peso . " kg\n";
    }
    
?>