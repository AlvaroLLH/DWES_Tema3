<?php

    // Incluimos la conexión
    include("conexionPDO.php");

    // Creamos la conexión
    $conexion = conexion();

    // Try-catch
    try {

        // Creamos la consulta
        $sql = "SELECT * FROM persona";

        // Creamos la sentencia y la ejecutamos
        $sentencia = $conexion -> prepare($sql);

        // Recibimos el tipo de dato array asociativo con claves nombre de las columnas
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();

        // Guardamos el número de filas
        $numFilas = $sentencia -> rowCount();

        // Si quedan filas
        if($numFilas > 0){

        // Guardamos los registros en una matriz
        $personas = $sentencia -> fetchAll();

        // Recorremos la matriz y mostramos los registros
        foreach($personas as $persona) {
            echo "ID: " . $persona["id_persona"] . "<br>";
            echo "Nombre: " . $persona["nombre"] . "<br><br>";
        }
    }
    
    // En caso de error, gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // Cerramos la conexión
    $conexion -> close();

?>