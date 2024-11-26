<?php

    /*
    Ejercicio 1: Comparación de arrays con == y ===
    Crea dos arrays y compara si son iguales o idénticos usando == y ===
    */

    // Declaración de Arrays
    $numeros1 = [15, 30, 45];
    $numeros2 = ["15", "30", "45"];
    $numeros3 = [89, 55, 67];
    $numeros4 = ["15", "30", "45"];

    // Condicional if-else que compara si son o no iguales
    if($numeros1 == $numeros2){
        echo "Son iguales";
    } else {
        echo "No son iguales";
    }

    // Condicional if-else que compara si son o no idénticos
    if ($numeros3 === $numeros4) {
        echo "Son idénticos";
    } else {
        echo "No son idénticos";
    }

?>