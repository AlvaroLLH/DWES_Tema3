    <?php

    /*
    Manipulación de un array multidimensional

    Crea un array y realiza las siguientes operaciones:

    - Agrega un nuevo alumno: array("Nombre" => "Sofía", "Edad" => "23")
    - Modifica la edad de Luis a 24
    - Elimina el último elemento del array
    - Muestra el array final usando print_r()

    Puedo utilizar las funciones aprendidas para manipular arrays multidimensionales.

    count(): Devuelve la cantidad de elementos en un array.
    array_push(): Agrega uno o más elementos al final de un array.
    array_pop(): Elimina y devuelve el último elemento de un array.
    array_merge(): Combina dos o más arrays en uno nuevo.
    */

    // Declaración de variables
    $nuevo_alumno = array("Nombre" => "Sofía", "Edad" => 23);
    $alumnos = array(
        array("Nombre" => "Ana", "Edad" => 21),
        array("Nombre" => "Luis", "Edad" => 22)
    );

    // Agregamos un nuevo alumno al array
    array_push($alumnos, $nuevo_alumno);

    // Mostramos el nuevo alumno
    print_r($alumnos[2]);
    echo "<br>";

    // Modificamos la edad de Luis a 24 años
    $alumnos[1]["Edad"] = 24;

    // Mostramos a Luis con su nueva edad
    print_r($alumnos[1]);
    echo "<br>";

    // Eliminamos el último elemento del array (Sofía)
    array_pop($alumnos);

    // Mostramos el array final sin el último elemento
    print_r($alumnos);

    ?>