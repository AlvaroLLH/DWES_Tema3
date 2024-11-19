<?php

    // Incluimos la conexión
    require_once("conexion.php");

    $conexion = conexion();

    // Sentencia SQL para la inserción de datos
    $sql = "INSERT INTO proyecto (titulo, logotipo) values (:titulo, :logotipo)";

    // Preparamos la consulta
    $sentencia = $conexion -> prepare(query: $sql);

    // Vincular parámetros usando bindParam
    $titulo = "ComidaSana";
    $logotipo = file_get_contents(filename: "https://cdn.pixabay.com/photo/2017/06/29/20/16/food-2456100_640.jpg");

    $sentencia -> bindParam(param: ':titulo', var: $titulo, type: PDO::PARAM_STR);
    $sentencia -> bindParam(param: ':logotipo', var: $logotipo, type: PDO::PARAM_LOB);

    // Ejecutamos la consulta
    $sentencia -> execute();

    echo "¡Datos insertados!";

?>