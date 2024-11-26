<?php

    // Incluimos la conexión
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion();

    // Try-catch
    try {

        // Verificamos si se envió el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Validamos los datos
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $fecha_registro = $_POST['fecha_registro'];

            // Verificamos que todos los campos obligatorios estén presentes
            if(empty($nombre) || empty($apellido) || empty($email) || empty($telefono) || empty($direccion) || empty($fecha_registro)) {
                die("Error: Todos los campos obligatorios deben estar completos");
            }

            // Creamos la consulta
            $sql = "INSERT INTO cliente (nombre, apellido, email, telefono, direccion, fecha_registro) VALUES (:nombre, :apellido, :email, :telefono, :direccion, :fecha_registro)";

            // Preparamos la consulta
            $sentencia = $conexion->prepare($sql);

            // Vinculamos los parámetros
            $sentencia->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $sentencia->bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $sentencia->bindParam(":email", $email, PDO::PARAM_STR);
            $sentencia->bindParam(":telefono", $telefono, PDO::PARAM_INT);
            $sentencia->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $sentencia->bindParam(":fecha_registro", $fecha_registro, PDO::PARAM_STR);

            // Ejecutamos la consulta
            if($sentencia->execute()) {

                // Redirigimos al listado de clientes
                header("Location: ../vista/listar_cliente.php");
                exit;

                // Si no hay datos, mensaje de error
            } else {
                echo "Error: No se pudo insertar el proyecto en la base de datos";
            }

        } else {
            echo "Error: El formulario no fue enviado correctamente";
        }

        // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e->getMessage();

        // Finalmente, desconectamos
    } finally {
        $conexion = null;
    }

?>