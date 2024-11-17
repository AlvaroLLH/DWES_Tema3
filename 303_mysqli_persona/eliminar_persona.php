<?php

    // Conectamos con la BD
    include("conexion.php");

    // Recogemos el id
    if(!isset($_GET["id_persona"])){
        exit("No hay id");
    }

    // Guardamos el id
    $id_persona = intval($_GET["id_persona"]);

    // Creamos la consulta
    $consultaDelete = $mysqli_conexion -> prepare("DELETE FROM persona WHERE id_persona = ?");

    // Verificamos si la consulta se preparó correctamente
    if(!$consultaDelete){
        die("Error al preparar la consulta " . $mysqli_conexion -> error);
    }

    // Establecemos el tipo del id
    $consultaDelete -> bind_param("i", $id_persona);

    // Ejecutamos la consulta
    $consultaDelete -> execute();

    // Verificamos que se ejecute correctamente
    if(!$consultaDelete -> execute()){
        die("Error al ejecutar la consulta " . $consultaDelete -> error);
    }

    // Cerramos la consulta y la conexión
    $consultaDelete -> close();
    $mysqli_conexion -> close();

    // Redirigimos al listado actualizado
    header("Location: listar_personas.php");
    exit;

?>