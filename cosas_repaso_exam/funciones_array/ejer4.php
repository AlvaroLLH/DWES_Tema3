<?php

    /*
    Ejercicio 4: Verificar si un elemento está en el array
    Utiliza in_array para verificar si un valor específico está en el array.
    */

    // Declaración de Array
    $color = ["azul", "violeta", "rojo"];

    // Verificamos si existe el color en el Array
    $existeColor = in_array("rojo", $color);

    // Mostramos un mensaje dependiendo de si existe o no
    if($existeColor == true){
        echo "El color indicado si existe";
    } else {
        echo "El color indicado no existe";
    }

?>