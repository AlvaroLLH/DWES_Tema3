<?php

    /*
    Ejercicio 10: Comprobar si existe una clave en un array
    Usa isset para verificar si una clave específica existe en un array asociativo.
    */

    // Declaración del Array
    $consolas = [
        0 =>"PS4",
        1 => "Xbox 360"
    ];

    // Guardamos el valor booleano de si existe o no la clave en una variable
    $seEncuentra = isset($consolas[1]);

    // Mostramos un mensaje al comprobar si existe o no esa clave en el Array
    if($seEncuentra == true){
        echo "La clave existe";
    } else {
        echo "La clave no existe"; 
    }

?>