<?php

    // Incluimos la conexión
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion();

    // Verificamos si los datos se enviaron por POST
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Recogemos los datos
        $id_cliente = $_POST['id_cliente'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $fecha_registro = $_POST['fecha_registro'];

        // Try-catch
        try {

            // Creamos la consulta
            $sql = "UPDATE cliente
                    SET nombre = :nombre,
                        apellido = :apellido,
                        email = :email,
                        telefono = :telefono,
                        direccion = :direccion,
                        fecha_registro = :fecha_registro ";

            // Añadimos la condición WHERE
            $sql .= "WHERE id_cliente = :id_cliente";

            // Preparamos la consulta
            $sentencia = $conexion->prepare($sql);

            // Asignamos valores a los parámetros
            $sentencia->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $sentencia->bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $sentencia->bindParam(":email", $email, PDO::PARAM_STR);
            $sentencia->bindParam(":telefono", $telefono, PDO::PARAM_INT);
            $sentencia->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $sentencia->bindParam(":fecha_registro", $fecha_registro, PDO::PARAM_STR);

            // Vinculamos el parámetro del ID del cliente
            $sentencia->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);

            // Ejecutamos la consulta
            if($sentencia->execute()) {

                // Redirigimos al listado de proyectos
                header("Location: ../vista/listar_cliente.php");
                exit;

            } else {
                echo "Error al actualizar el registro";
            }

            // Gestionamos la excepción
        } catch (PDOException $e) {
            echo $e->getMessage();

            // Finalmente, cerramos la conexión
        } finally {
            $conexion = null;
        }

    } else {
        echo "Método no permitido";
    }

?>