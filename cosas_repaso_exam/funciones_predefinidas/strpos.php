    <?php

    /*
    Encuentra la primera y última ocurrencia de un carácter
    */

    // Declaración de variables
    $frase = "Busca y encontrarás, siempre se encuentra, tenlo por seguro";

    echo "Primera coma: " . strpos($frase, ","); // strpos para encontrar la primera ocurrencia
    echo "<br>Última coma: " .strrpos($frase, ","); // strrpos para encontrar la última ocurrencia

    ?>