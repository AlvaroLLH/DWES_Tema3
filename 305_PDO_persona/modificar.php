<?php

    // Try-catch
    try {

    // Incluimos la conexión
    include("conexionPDO.php");

    // Creamos la conexión
    $conexion = conexion();

    // Guardamos el nombre antiguo y el nuevo
        $nombre_old = "Fernando";
        $nombre_new = "Luis";

        // Sentencia SQL para actualizar el registro
        $sql = "UPDATE persona SET nombre = :nombre_new WHERE nombre = :nombre_old";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);

        // Vinculamos los parámetros :nombre_old y :nombre_new
        $sentencia -> bindParam(':nombre_old', $nombre_old, PDO::PARAM_STR);
        $sentencia -> bindParam(':nombre_new', $nombre_new, PDO::PARAM_STR);

        // Ejecutamos la consulta
        $resultado = $sentencia -> execute();

    } catch (PDOException $e) {
        echo $e -> getMessage();

    } finally {

        // Cerramos la conexión
        $conexion = null;
    }

?>