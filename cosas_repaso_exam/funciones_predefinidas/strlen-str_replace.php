    <?php

    /*
    Calcula la longitud de una frase y reemplaza una palabra en ella
    */

    // Declaración de variables
    $frase = "Buenas tardes";
    $longitud = strlen($frase); // Guardamos la longitud de la frase
    $nueva_frase = str_replace("tardes", "noches", $frase); // Guardamos la nueva frase con la palabra reemplazada

    // Mostramos la longitud y la nueva frase
    echo "La frase " . $frase . " tiene " . $longitud . " caracteres de longitud<br>";
    echo $nueva_frase;

    ?>