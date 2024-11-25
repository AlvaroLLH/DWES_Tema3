<?php

    // Función que devuelve la conexión
    function conexion() {

        // Guardamos los datos para conectarnos a la BD
        $servidor = "mysql:dbname=pruebas;host=localhost";
        $usuario = "root";
        $pw = "";

        // Try-catch
        try {

            // Creamos la conexión y conectamos
            $conexion = new PDO($servidor, $usuario, $pw);
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Gestionamos la excepción
        } catch (PDOException $e) {
            echo $e -> getMessage();
        }

        // Mensaje de éxito
        echo "¡Conectado!";
    }

?>