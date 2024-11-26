    <?php

    /*
    Compara cadenas usando strcmp y strncmp
    */

    // Declaración de variables
    $cadena1 = "Casa";
    $cadena2 = "Casa Blanca";

    // Si el resultado de comparar ambas cadenas es 0, son iguales
    if(strcmp($cadena1, $cadena2) == 0){
        echo "Las cadenas son iguales";
    } else {
        echo "Las cadenas no son iguales";
    }

    echo "<br>";

    // Si el resultado de comparar los 3 primeros caracteres es 0, son iguales
    if(strncmp($cadena1, $cadena2, 3) == 0){
        echo "Los caracteres son iguales";
    } else {
        echo "Los caracteres no son iguales";
    }

    ?>