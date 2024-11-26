    <?php

    /*
    Si queremos romper las cadenas en trozos, tenemos:

    explode: convierte en array la cadena mediante un separador.
    implode / join: pasa un array a cadena con un separador
    str_split / chunk_split: pasa una cadena a una array/cadena cada X caracteres

    Divide una cadena y luego únelas de nuevo
    */

    // Declaración de variables
    $cadena = "Buenas tardes. Como estás";
    $partes = explode(".", $cadena); // Divide las partes y las guarda en el Array

    // Mostramos la cadena original
    echo $cadena . "<br>";

    // Mostramos las partes de la cadena
    print_r($partes);
    echo "<br>";

    // Volvemos a unir las cadenas en una y la mostramos
    $unir = implode(".", $partes);
    echo $unir;

    ?>