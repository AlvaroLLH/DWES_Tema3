<?php

    // Incluimos la conexion
    include("conexionPDO.php");

    // Creamos la conexión
    $conexion = conexion();

    // Try-catch
    try {

        // Creamos la consulta
        $sql = "SELECT * FROM persona";

        // Creamos la sentencia y la ejecutamos
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_OBJ); // Leemos datos con forma de objeto
        $sentencia -> execute();

        // Guardamos el número de filas
        $numFilas = $sentencia -> rowCount();

        // Si quedan filas
        if($numFilas > 0){

        // Mostramos los datos de los objetos
        while($t = $sentencia -> fetch()){
            echo "ID: " . $t -> id_persona . "<br>";
            echo "Nombre: " . $t -> nombre . "<br><br>"; 
        }
    }

    // En caso de error, gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // Cerramos la conexión
    $conexion -> close();

?>