    <?php

    /*
    Cuenta cuántas veces aparece una letra y reemplaza una parte de la frase
    */

    // Declaración de variables
    $frase = "Estocolmo es la capital de Suecia";
    $e = substr_count($frase, "e"); // Cuántas veces aparece la "e"
    $noruega = substr_replace($frase, "Noruega", -6); // Reemplazamos Suecia por Noruega

    // Frase original
    echo $frase . "<br>";

    // Mostramos la cantidad de veces que aparece la letra "e"
    echo "La letra 'e' aparece " . $e . " veces en la frase<br>";

    // Mostramos la frase con la parte reemplaza
    echo $noruega;

    ?>