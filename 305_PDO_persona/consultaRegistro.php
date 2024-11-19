<?php

    // Try-catch
    try {

        // Incluimos la conexión
        include("conexionPDO.php");

        // Creamos la conexión
        $conexion = conexion();

        // Seleccionamos las personas cuyo id_persona sea 1
        $sql = "SELECT * FROM persona WHERE id_persona = :id";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);

        // Valor del ID a buscar
        $id_a_buscar = 1;

        // Vinculo el parámetro :id_persona
        $sentencia -> bindParam(':id', $id_a_buscar, PDO::PARAM_INT);

        // Ejecutar la consulta
        $sentencia -> execute();

        // Obtenemos los resultados
        $resultados = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

    // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();

    } finally {

        // Cerramos la conexión
        $conexion = null;
    }

    // Mostramos los resultados
    if(!empty($resultados)){

        // Recorremos el array asociativo
        foreach($resultados as $fila){

            // Imprimimos los datos de cada fila
            echo "<p>ID: " . $fila['id_persona'] . "</p>";
            echo "<p>Nombre: " . $fila['nombre'] . "</p>";
            echo "<p>Apellidos: " . $fila['apellidos'] . "</p>";
            echo "<p>Teléfono: " . $fila['telefono'] . "</p>";
            echo "<p>Edad: " . $fila['edad'] . "</p>";
            
        }
    } else {
        echo "<p>No se encontraron resultados</p>";
    }

?>