    <?php

    /*
    Extrae partes de una cadena usando substr
    */

    // Declaración de variables
    $cadena = "Aprender PHP es fácil y divertido";

    // Mostramos las partes substraídas de la cadena original
    echo substr($cadena, 0, 8) . "<br>"; // "Aprender", del primer carácter, los 8 siguientes
    echo substr($cadena, -9) . "<br>";   // "divertido", los últimos 9 caracteres

    ?>