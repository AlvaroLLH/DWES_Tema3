    <?php

    /*
    Crea un programa que indique el día de la semana usando switch
    */

    // Variable
    $dia_semana = rand(1,7);

    // Switch
    switch ($dia_semana) {

        case 1:
            echo "Lunes";
            break;
        
        case 2:
            echo "Martes";
            break;

        case 3:
            echo "Miércoles";
            break;

        case 4:
            echo "Jueves";
            break;

        case 5:
            echo "Viernes";
            break;

        case 6:
            echo "Sábado";
            break;

        case 7:
            echo "Domingo";
            break;
    }

    ?>