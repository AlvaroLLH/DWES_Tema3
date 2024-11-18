<?php

    /*
    Crea este código conectando a la BD prueba con la función creada anteriormente.
    Comprueba que ha borrado correctamente indicando mediante un mensaje si hay error y muestra
    el número de registros borrados. No olvides usar try-catch y cerrar la conexión.
    */

    // Incluimos la conexión
    include("conexionPDO.php");

    // Creamos la conexión
    $conexion = conexion();

    // Indicamos por URL el nombre del registro a eliminar
    $nombre = $_GET["nombre"];

    // Try-catch
    try {

        // Sentencia SQL para borrar el registro
        $sql = "DELETE FROM persona WHERE nombre = :nombre";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);

        // Vinculamos el parámetro :nombre
        $sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);

        // Ejecutamos la consulta
        $resultado = $sentencia -> execute();

        // Verificamos cuántos registros han sido eliminados
        $registrosBorrados = $sentencia -> rowCount();

        if($registrosBorrados > 0){
            echo "Datos eliminados correctamente. Registros eliminados: " . $registrosBorrados;

        } else {
            echo "No se encontraron registros con ese nombre para eliminar";
        }

    // En caso de error, gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();

    } finally {

         // Cerramos la conexión
        $conexion = null;
    }

?>