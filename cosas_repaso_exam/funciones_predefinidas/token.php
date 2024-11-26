    <?php

    /*
    Recorre una cadena dividiéndola por palabras
    */

    // Declaración de variables
    $cadena = "Hola buenos días";
    $tok = strtok($cadena, " ");

    // Mostramos el primer token
    print_r($tok);
    echo "<br>";

    // Mientras que tok sea distinto de false, nos muestra todos los tokens
    while ($tok !== false) {
        echo "Palabra: " . $tok . "<br>";
        $tok = strtok(" ");
    }

    ?>