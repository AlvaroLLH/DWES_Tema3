<?php

    // Incluimos la conexión
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion();

    // Recogemos los datos enviados por el formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $periodo = $_POST['periodo'];
    $curso = $_POST['curso'];
    $fecha_presentacion = $_POST['fecha_presentacion'];
    $nota = $_POST['nota'];
    $logotipo = $_POST['logotipo'];

    // Verificamos que los datos obligatorios estén presentes
    if(!isset($titulo, $descripcion, $periodo, $curso, $fecha_presentacion, $nota, $logotipo)){
        die("Error. Todos los campos son obligatorios");
    }

    // Sentencia SQL para la inserción de datos
    $sql = "INSERT INTO proyecto (titulo, logotipo) values (:titulo, :logotipo)";

    // Preparamos la consulta
    $sentencia = $conexion -> prepare(query: $sql);

    // Verificamos si se preparó correctamente la consulta
    if(!$sentencia){
        die("Error al preparar la consulta. " . $mysqli_conexion -> error);
    }

    // Vinculamos parámetros usando bindParam
    $sentencia -> bindParam(param: ':titulo', var: $titulo, type: PDO::PARAM_STR);
    $sentencia -> bindParam(param: ':descripcion', var: $descripcion, type: PDO::PARAM_STR);
    $sentencia -> bindParam(param: ':periodo', var: $periodo, type: PDO::PARAM_INT);
    $sentencia -> bindParam(param: ':curso', var: $curso, type: PDO::PARAM_INT);
    $sentencia -> bindParam(param: ':fecha_presentacion', var: $fecha_presentacion, type: PDO::PARAM_STR);
    $sentencia -> bindParam(param: ':nota', var: $nota, type: PDO::PARAM_INT);
    $sentencia -> bindParam(param: ':logotipo', var: $logotipo, type: PDO::PARAM_LOB);

    // Ejecutamos la consulta
    if($sentencia -> execute()){

        // Redirigimos al listado de proyectos
        header("Location: ../vista/listar_proyecto.php");
        exit;

    } else {
        echo "Error al insertar el registro " . $mysqli_conexion -> error;
    }

    // Cerramos la sentencia y desconectamos
    $sentencia -> close();
    $mysqli_conexion -> close();

?>