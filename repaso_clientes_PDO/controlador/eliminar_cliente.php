<?php

    // Incluimos la conexión
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion();

    // Pedimos el ID por URL
    $id_cliente = $_GET['id_cliente'];

    // Comprobamos que se haya pasado un ID
    if(!isset($id_cliente)) {
        exit("No hay ID");
    }

    // Creamos la consulta
    $sql = "DELETE FROM cliente WHERE id_cliente = :id_cliente";

    // Preparamos la consulta
    $sentencia = $conexion->prepare($sql);

    // Vinculamos el parámetro del ID
    $sentencia->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);

    // Ejecutamos la consulta
    $sentencia->execute();

    // Redirigimos al listado de proyectos
    header("Location: ../vista/listar_cliente.php");

    // Desconectamos
    $conexion = null;

?>