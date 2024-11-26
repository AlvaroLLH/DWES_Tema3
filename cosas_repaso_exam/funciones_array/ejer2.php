<?php

    /*
    Ejercicio 2: Unión de arrays con el operador +
    Utiliza el operador + para unir dos arrays y verifica el comportamiento cuando ambos tienen claves duplicadas
    */

    // Si existen claves duplicadas, no se unen los valores ya que solo permanece el primero

    // Declaración de Arrays
    $array1 = [
        0 => 20,
        1 => 30,
        2 => 33,
    ];

    $array2 = [
        3 => 15,
        1 => 30,
        2 => 33
    ];

    // Unimos los dos primeros Arrays para crear otro
    $array3 = $array1 + $array2;

    // Mostramos el Array creado a partir de la unión
    print_r($array3);

?>