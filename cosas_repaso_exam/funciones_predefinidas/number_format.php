    <?php

    /*
    Mediante la función number_format(numero, cantidadDecimales, separadorDecimales, separadorMiles) podermos pasar números a cadena con decimales y/o separadores de decimales y/o de miles.

    Muestra un número con formato especial
    */

    // Declaración de variables
    $num = 8732.981;

    // Mostramos el número formateado
    echo "Te muestro el número " . $num . " formateado: " . number_format($num, 2, ",", ".");

    ?>