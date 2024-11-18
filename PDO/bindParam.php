<?php

    /*
    Si deseo realizar agregar un nuevo registro en nuestra tabla, tendré que seguir con las 3 fases PHP
    para su completa ejecución:

    - prepare: prepara la sentencia antes de ser ejecutada
    - bind: el tipo de unión (bind) de dato que puede ser mediante '?' (menos usado ya) o ':parametro'
    y se puede usar bindParam() o bindValue()
    - execute: se ejecuta la consulta uniendo la plantilla con las variables o parámetros que hemos
    establecido.
    */

    /*
    bindParam()

    - Esta función vincula un parámetro a una variable. Esto significa que si el valor de la variable
    cambia después de llamar a bindParam(), esos cambios se reflejarán en la consulta preparada cuando
    se ejecute.
    - Puede aceptar variables o referencias como parámetros
    - Es útil cuando se necesita pasar una variable cuyo valor pueda cambiar antes de la ejecución
    de la consulta
    */

    // Incluimos la conexion
    include("conexionPDO.php");

    // Creamos la conexión
    $conexion = conexion();

    // Creamos las variables que contienen los datos a insertar
    $nombre = "Jorge";
    $apellidos = "Martin Janeiro";
    $telefono = 696210447;
    $edad = 28;

    // Try-catch
    try {

        // Sentencia SQL para la inserción de datos
        $sql = "INSERT INTO persona (nombre, apellidos, telefono, edad) values (:nombre, :apellidos,
        :telefono, :edad)";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);

        // Vinculamos los parámetros con bindParam
        // Tipo de datos PDO::PARAM_ST si es string y PDO::PARAM_INT si es entero
        $sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $sentencia -> bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $sentencia -> bindParam(':telefono', $telefono, PDO::PARAM_INT);
        $sentencia -> bindParam(':edad', $edad, PDO::PARAM_INT);

        // Ejecutamos la consulta
        $sentencia -> execute();

    // En caso de error, gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // Cerramos la conexión
    $conexion -> close();

    echo "¡Datos insertados!"

?>