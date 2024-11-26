    <?php

    /*
    Crea un array bidimensional y muestra por pantalla estos valores:

    - El primer elemento de la tercera fila
    - El último elemento de la primera fila
    - La suma de los elementos de la segunda fila
    */

    // Declaración de variables
    $suma = 0;
    $matriz = array(
        array(10, 20, 30),
        array(40, 50, 60),
        array(70, 80, 90)
    );

    // Recorremos la matriz con foreach anidados
    foreach ($matriz as $fila ) {
        foreach ($fila as $elemento) {
            echo $elemento . "<br>";
        }
    }

    // Recorremos la matriz con bucles for y sumamos los elementos de la segunda fila
    for($i = 0; $i < count($matriz); $i++){
        for($j = 0; $j < count($matriz[$i]); $j++){

            // Solo sumamos los elementos de la segunda fila (índice 1)
            if($i == 1){
                $suma += $matriz[$i][$j];
            }
        }
    }

    echo "<p>------------------------------------------------------</p>";

    // Mostramos los valores
    echo "El primer elemento de la tercera fila: " . $matriz[2][0] . "<br>";
    echo "El último elemento de la primera fila: " . $matriz[0][2] . "<br>";
    echo "La suma de los elementos de la segunda fila: " . $suma;

    ?>