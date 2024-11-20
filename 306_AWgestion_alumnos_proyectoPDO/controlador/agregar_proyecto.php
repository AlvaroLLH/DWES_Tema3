<?php

    // Incluimos la conexión
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion();

    // Try-catch
    try {

    // Verificamos que los datos obligatorios estén presentes
    if(!isset($titulo, $descripcion, $periodo, $curso, $fecha_presentacion, $nota, $logotipo)){
        die("Error. Todos los campos son obligatorios");
    }

    // Sentencia SQL para la inserción de datos
    $sql = "INSERT INTO proyecto (titulo, descripcion, periodo, curso, fecha_presentacion, nota, logotipo)
    values (:titulo, :descripcion, :periodo, :curso, :fecha_presentacion, :nota, :logotipo)";

    // Preparamos la consulta
    $sentencia = $conexion -> prepare($sql);

    // Vinculamos parámetros usando bindParam
    $sentencia -> bindParam(":titulo", $titulo, PDO::PARAM_STR);
    $sentencia -> bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
    $sentencia -> bindParam(":periodo", $periodo, PDO::PARAM_INT);
    $sentencia -> bindParam(":curso", $curso, PDO::PARAM_INT);
    $sentencia -> bindParam(":fecha_presentacion", $fecha_presentacion, PDO::PARAM_STR);
    $sentencia -> bindParam(":nota", $nota, PDO::PARAM_INT);
    $sentencia -> bindParam(":logotipo", $logotipo, PDO::PARAM_LOB);

    // Ejecutamos la consulta
    if($sentencia -> execute()){

        // Redirigimos al listado de proyectos
        header("Location: ../vista/listar_proyecto.php");
        exit;

    // Si no hay datos, mostramos un error
    } else {
        echo "Error, no hay datos que mostrar";
    }

    // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    // Desconectamos
    $conexion = null;

?>