<?php

    /*
    Crea un programa calculaSueldo al que le pases la edad y el sueldo de una
    persona y devuelve el nuevo sueldo de esa persona (la edad mínima de la persona
    debe ser 16 años).

    Si el sueldo supera los 3000€ no cambiará el sueldo, pero si el sueldo se
    encuentra entre 2000€ y 3000€, tendremos en cuenta la edad, ya que si tiene más
    de 40 se sube un 20% y un 13% al resto.
   
    En el caso de que el sueldo sea inferior a 2000€, a los menores de 30 años, se les
    asignará un sueldo de 2030€. Si la edad está comprendida entre 30 y 40 años, se
    les sube un 4%. En otro caso les subirá un 15%.
 
    El programa nos dice la edad, el sueldo anterior y el nuevo sueldo además de
    imprimir por pantalla la fecha/hora completa en la que se ha generado el sueldo.
    */

    // Función calculaSueldo
    function calculaSueldo($edad, $sueldo) {

        // Validamos que la edad mínima sea 16 años
        if($edad < 16) {
            return "Error: La edad mínima para calcular el sueldo es de 16 años";
        }

        // Guardamos el sueldo inicial para mostrarlo después
        $sueldoAnterior = $sueldo;

        // Calculamos el nuevo sueldo según las condiciones
        if($sueldo > 3000) {

            // Si es mayor de 3000, no cambia
            $nuevoSueldo = $sueldo;

            // Si el sueldo está entre 2000€ y 3000€
        } else if($sueldo >= 2000 && $sueldo <= 3000) {

            // Si son mayores de 40
            if($edad > 40) {
                $nuevoSueldo = $sueldo * 1.20; // Subida del 20%
            } else {
                $nuevoSueldo = $sueldo * 1.13; // Subida del 13%
            }

            // Si el sueldo es menor de 2000
        } else if($sueldo < 2000) {

            // Si son menores de 30
            if($edad < 30) {
                $nuevoSueldo = 2030; // Sueldo fijo

                // Si está entre 30 y 40
            } else if ($edad >= 30 && $edad <= 40) {
                $nuevoSueldo = $sueldo * 1.04; // Subida del 4%
            } else {
                $nuevoSueldo = $sueldo * 1.15; // Subida del 15%
            }
        }

        // Obtenemos la hora y fecha actual
        $fechaHora = date('Y-m-d H:i:s');

        // Mostramos resultados
        echo "Edad: " . $edad . " años\n";
        echo "Sueldo anterior: " . number_format($sueldoAnterior, 2) . "€\n";
        echo "Nuevo sueldo: " . number_format($nuevoSueldo, 2) . "€\n";
        echo "Fecha y hora: " . $fechaHora . "\n";

        // Retornamos el nuevo sueldo
        return $nuevoSueldo;
    }

    // Ejemplo de uso
    calculaSueldo(35, 2500);

?>