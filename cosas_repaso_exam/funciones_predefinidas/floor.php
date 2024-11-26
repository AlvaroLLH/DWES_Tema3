    <?php

    /*
    Para redondear, tenemos abs para el valor absoluto y round para redondear, ceil para aproximación por exceso y floor por defecto.

    Genera un número aleatorio y lo redondea
    */

    // Declaración de variables
    $num = rand(1, 100) + 0.5;

    // Mostramos el número redondeado con floor
    echo "Te muestro el número " . $num . " redondeado: " . floor($num);

    ?>