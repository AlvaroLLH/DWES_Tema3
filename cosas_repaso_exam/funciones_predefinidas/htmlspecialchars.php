    <?php

    /*
    Convierte texto a entidades HTML
    */

    // Declaración de variables
    $texto = "<p>Hola & bienvenido</p>";

    echo "Texto con htmlspecialchars: " . htmlspecialchars($texto) . "<br>";
    echo "Texto sin etiquetas: " . strip_tags($texto);

    ?>