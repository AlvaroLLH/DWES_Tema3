<?php

    /*
    bindValue()

    - Esta función vincula un valor específico a un marcador de posición en la consulta. Si el valor de
    la variable original cambia después de llamar a bindValue(), el valor vinculado a la consulta
    preparada permanece inalterado.
    - Solo acepta valores directos y no referencias.
    - Es útil cuando se desea fijar un valor.
    */

    // Incluimos la conexión
    include("conexionPDO.php");

    // Creamos la conexión
    $conexion = conexion();

    // Creamos las variables que contienen los datos a insertar
    $nombre = "Alejandro";
    $apellidos = "Alejandrez Gonzalez";
    $telefono = 698103477;
    $edad = 45;

    // Try-catch
    try {

        // Sentencia SQL para la inserción de datos
        $sql = "INSERT INTO persona (nombre, apellidos, telefono, edad) values (:nombre, :apellidos,
        :telefono, :edad)";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);

        // Vinculamos parámetros usando bindValue
        // Tipo de datos: PDO::PARAM_ST para string y PDO::PARAM_INT para entero
        $sentencia -> bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $sentencia -> bindValue(':apellidos', $apellidos, PDO::PARAM_STR);
        $sentencia -> bindValue(':telefono', $telefono, PDO::PARAM_INT);
        $sentencia -> bindValue(':edad', $edad, PDO::PARAM_INT);

        // Ejecutamos la consulta
        $sentencia -> execute();

        // Guardamos el ID del último registro creado y lo mostramos
        $idGenerado = $conexion -> lastInsertId();
        echo "El registro tiene el id Nº " . $idGenerado . "<br>";

    // En caso de error, gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // Cerramos la conexión
    $conexion -> close();
    
    echo "¡Datos insertados!";

?>