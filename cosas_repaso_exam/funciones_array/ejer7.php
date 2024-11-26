<?php

    /*
    Ejercicio 7: Eliminar un elemento de un array asociativo
    Usa unset para eliminar un elemento específico de un array asociativo.
    */

    // Declaración del Array
    $paises = [
        "Francia" => "Paris",
        "Islandia" => "Reijkvaik",
        "Noruega" => "Oslo"
    ];

    // Eliminamos Francia del Array asociativo
    unset($paises["Francia"]);

    // Mostramos el Array sin Francia
    print_r($paises);

?>