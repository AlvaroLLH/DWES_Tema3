<?php

    // Conectamos a la base de datos
    include("conexion.php");

    // Consulta a la base de datos
    $id_persona = $_GET["id_persona"];

    // Preparamos la select
    $consultaSelect = $mysqli_conexion -> prepare("SELECT * FROM persona WHERE id_persona=?");

    // Vinculamos la variable al parámetro e indicamos el tipo
    $consultaSelect -> bind_param("i", $id_persona);

    // Ejecutamos la consulta
    if($consultaSelect -> execute()){

        // Obtenemos solo una fila, que será la persona
        $resultado = $consultaSelect -> get_result();
        $usuario = $resultado -> fetch_assoc();

        if(!$usuario){
            exit("No hay resultados para ese ID");
        }

    } else {
        // error
    }

    // Liberamos memoria y cerramos la conexión
    $resultado -> free();
    $mysqli_conexion -> close();

?>