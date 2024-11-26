    <?php

    /*
    Al revés que sprintf, sscanf crea un array a partir de la cadena y el patrón.

    Extrae datos de una cadena usando sscanf
    */

    // Declaración de variables
    $cadena = "edad: 25 peso: 76kg";

    // Transformamos la cadena en array y guardamos los valores en variables
    $array = sscanf($cadena, "edad:%d peso:%dkg", $edad, $peso);

    // Mostramos los tipos y los valores
    var_dump($edad, $peso);

    ?>