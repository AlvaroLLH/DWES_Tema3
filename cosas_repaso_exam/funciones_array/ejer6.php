<?php

    /*
    Ejercicio 6: Obtener las claves de un array asociativo
    Utiliza array_keys para obtener las claves de un array asociativo.
    */

    // Declaración de Array
    $provincias = [
        "León" => 446.000,
        "Palencia" => 158.000,
        "Burgos" => 174.000,
        "Zamora" => 165.000
    ];

    // Guardamos las claves del Array en la variable
    $clavesProv = array_keys($provincias);

    // Mostramos las claves del Array
    print_r($clavesProv);

?>