<?php

    /*
    Ejercicio 9: Fusionar arrays con array_merge
    Usa array_merge para combinar múltiples arrays en uno solo.
    */

    // Declaración de los Arrays
    $numeros = [1,2,3];
    $letras = ["a","b","c"];

    // Creamos el Array fusionado de $numeros y $letras
    $fusionado = array_merge($numeros,$letras);

    // Mostramos el Array fusionado
    print_r($fusionado);

?>