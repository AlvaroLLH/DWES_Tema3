    <?php

    /*
    Si queremos averiguar qué contiene las cadenas, tenemos un conjunto de funciones de comprobaciones de tipo, se conocen como las funciones ctype que devuelven un booleano:

    ctype_alpha → letras
    ctype_alnum → alfanuméricos (letras y/o números)
    ctype_digit → dígitos
    ctype_punct → caracteres de puntuación, sin espacios
    ctype_space → son espacios, tabulador, salto de línea

    Verifica si una cadena contiene solo letras o números
    */

    // Declaración de variables
    $cadena = "PHP7";
    $cadena1 = "*/*";

    // Si la cadena solo contiene caracteres alfanuméricos (letras y/o números)
    if(ctype_alnum($cadena)){
        echo $cadena . " solo contiene letras o números<br>";
    } else {
        echo $cadena . " contiene otros caracteres<br>";
    }

    // Si la cadena solo contiene letras
    if(ctype_alpha($cadena1)) {
        echo $cadena1 . " solo contiene letras";
    } else {
        echo $cadena1 . " contiene otras caracteres"; 
    }

    ?>