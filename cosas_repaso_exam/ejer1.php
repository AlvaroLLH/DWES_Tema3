<?php

    /*
    Crea una función llamada operandoValores que recibe un número indefinido de enteros y devuelve la suma y el producto de los mismos
    */

    // Función que recibe un número indefinido de enteros
    function operandoValores () {

        // Creamos un array con los números recibidos
        $numeros = func_get_args();

        // Declaración de variables
        $suma = array_sum($numeros);
        $producto = array_product($numeros);

        // Validamos que los números sean enteros
        foreach ($numeros as $numero) {
            if(!is_int($numero)) {
                echo "Error: Todos los número deben ser enteros";
            }
        }

        // Devolvemos la suma y el producto
        return "Suma: " . $suma . " Producto: " . $producto;

    }

    // Llamamos a la función y le pasamos valores
    echo(operandoValores(1, 5, 22, 88, 3));

?>