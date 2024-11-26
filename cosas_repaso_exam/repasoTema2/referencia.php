    <?php

    /*
    Crea dos variables, una por copia y otra por referencia. Modifica una y observa los efectos en la otra.
    */

    // Variables
    $var1 = 55;
    $copia = $var1;
    $referencia = &$var1;

    // Mostramos las variables
    echo $copia . " / " . $referencia . "<br>";

    $var1 = 69; // Cambiamos el valor de 'var1'

    // Mostramos las variables otra vez tras el cambio
    echo $copia . " / " . $referencia;

    ?>