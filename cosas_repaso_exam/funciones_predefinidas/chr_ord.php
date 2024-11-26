    <?php

    /*
    Descubre el carácter ASCII siguiente a: "A"
    */

    // Declaración de variables
    $letra = "A";
    $codigoASCII = ord($letra);
    $ASCII = chr(33);

    // Sacamos el código ASCII de A
    echo "El código ASCII de " . $letra . " es " . $codigoASCII . "<br>";

    // Sacamos un cáracter ASCII a partir de su código
    echo "El código ASCII 33 pertenece al cáracter: " . $ASCII . "<br>";

    // Descubrimos el siguiente carácter ASCII. Con ord sacamos el código ASCII de la letra y con chr usando el código ASCII más 1 para sacar el siguiente carácter
    echo "El carácter siguiente a " . $letra . " es: " . chr(ord($letra) + 1);

    ?>