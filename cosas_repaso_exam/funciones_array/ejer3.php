<?php

    /*
    Ejercicio 3: Uso de array_pop y array_push
    Crea un array de frutas y añade una nueva fruta al final, luego elimina la última fruta y muestra el array.
    */

    // Declaración de Array
    $frutas = ["fresa", "uva", "melon"];

    // Añadimos una fruta al final del Array
    array_push($frutas, "pera");

    // Mostramos el Array con la nueva fruta
    print_r($frutas);
    echo "<br>";

    // Eliminamos la fruta del Array
    array_pop($frutas);

    // Mostramos el Array sin la nueva fruta
    print_r($frutas);

?>