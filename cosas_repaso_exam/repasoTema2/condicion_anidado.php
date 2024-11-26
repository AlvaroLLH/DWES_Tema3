    <?php

    /*
    Realiza un programa, que indique la hora del día (mañana, tarde, noche) según la hora actual
    */

    // Variable
    $fecha_actual = 15;

    // Condicional anidado
    if($fecha_actual >= 8 && $fecha_actual <= 14){
        echo "Es por la mañana";
    } else if($fecha_actual >= 15 && $fecha_actual <= 20){
        echo "Es por la tarde";
    } else {
        echo "Es por la noche";
    }

    ?>