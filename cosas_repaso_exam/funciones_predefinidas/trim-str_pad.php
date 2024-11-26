    <?php

    /*
    Elimina espacios y completa la cadena con str_pad
    */

    // Declaración de variables
    $cadena = " Voy al instituto en autobús ";
    $limpia = trim($cadena); // Trim para borrar los espacios de delante y los de detrás
    $completa = str_pad($limpia, 30, "o"); // Rellenamos con "o" hasta el carácter 30

    // Mostramos la cadena limpia y la completa
    echo $limpia . "<br>";
    echo $completa;

    ?>