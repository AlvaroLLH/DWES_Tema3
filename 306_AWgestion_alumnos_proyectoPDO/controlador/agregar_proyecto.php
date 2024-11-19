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

    // Vincular parámetros usando bindParam
    $titulo = "ComidaSana";
    $logotipo = file_get_contents(filename: "https://cdn.pixabay.com/photo/2017/06/29/20/16/food-2456100_640.jpg");

    $sentencia -> bindParam(param: ':titulo', var: $titulo, type: PDO::PARAM_STR);
    $sentencia -> bindParam(param: ':logotipo', var: $logotipo, type: PDO::PARAM_LOB);

    // Ejecutamos la consulta
    $sentencia -> execute();

    echo "¡Datos insertados!";

?>