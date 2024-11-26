<?php

    /*
    Ejercicio 8: Extraer un subconjunto de un array
    Utiliza array_slice para extraer una parte de un array.
    */

    // Declaración del Array
    $herramientas = ["martillo", "destornillador", "taladro"];

    // Creamos el subconjunto con el valor de la posición 2 del Array
    $subconjunto = array_slice($herramientas, 2);

    // Mostramos el subconjunto
    print_r($subconjunto);

?>