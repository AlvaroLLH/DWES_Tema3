<?php

    /*
    Crea una función llamada compruebaAnagrama, que al pasar el usuario una palabra de 4 letras, compruebe si es un anagrama de una palabra de 4 letras generada por el programa de forma aleatoria.
 
    Las palabras deben serlo y de 4 caracteres
    
    El programa devolverá "La palabra rama es un anagrama de amar." En caso de que lo sea
    
    NOTA: código ASCII A-Z: 65-90, a-z: 97-122
    */

    /*
    La función count_chars() en PHP analiza una cadena y devuelve información sobre la frecuencia de cada
    carácter que aparece en ella. El modo 1 incluye todos los caracteres posibles (0-255), incluso si
    no aparecen en la cadena
    */

    // Función que comprueba si una palabra es un anagrama
    function compruebaAnagrama($palabraUsuario) {

        // Creamos un array que almacena varias palabras de 4 letras
        $palabras = ['amar', 'roma', 'rama', 'mora', 'omar', 'arma'];

        // Seleccionamos una palabra al azar del array
        $palabraAleatoria = $palabras[array_rand($palabras)];

        // Validamos que la palabra pasada por el usuario tenga exactamente 4 carácteres
        if(strlen($palabraUsuario) !== 4) {
            return "Error. La palabra debe tener 4 carácteres";
        }

        // Convertimos ambas palabras a arreglos de letras, las ordenamos y comparamos
        $esAnagrama = (count_chars($palabraUsuario,1) === count_chars($palabraAleatoria, 1));

        // Devolvemos el resultado
        if($esAnagrama) {
            return "La palabra " . $palabraUsuario . " es un anagrama de " . $palabraAleatoria;
        } else {
            return "La palabra " . $palabraUsuario . " no es un anagrama de " . $palabraAleatoria;
        }

    }

    // Llamamos a la función
    echo compruebaAnagrama('arma');

?>