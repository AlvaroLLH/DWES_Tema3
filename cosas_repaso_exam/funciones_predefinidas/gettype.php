    <?php

    /*
    Finalmente, para realizar conversiones de datos o si queremos trabajar con tipos de datos, tenemos las siguientes funciones:

    - floatval, intval, strval: devuelve una variable del tipo de la función indicada

    - settype: fuerza la conversión

    - gettype: obtiene el tipo

    - is_int, is_float, is_string, is_array, is_object: devuelve un booleano a partir del tipo recibido

    Convierte una variable a diferentes tipos y verifica su tipo
    */

    // Declaración de variables
    $variable = 22; // Entero

    // Verificamos si es entero
    echo $variable . " es entero" . var_dump(is_int($variable)) . "<br>"; // True

    // Pasamos a string
    $variable = strval($variable);

    // Verificamos si es string
    echo $variable . " es string" . var_dump((is_string($variable))); // True

    ?>