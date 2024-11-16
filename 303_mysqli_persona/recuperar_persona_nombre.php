<?php

    // Conectamos a la base de datos
    include("conexion.php");

    // Validamos que el parámetro GET esté presente y sea cadena
    if(!isset($_GET["nombre"]) || !is_string($_GET["nombre"])){
        exit("Nombre no válido");
    }

    // Consulta a la base de datos
    $nombre = $_GET["nombre"];

    // Preparamos la select
    $consultaSelect = $mysqli_conexion -> prepare("SELECT * FROM persona WHERE nombre = ?");

    // Vinculamos la variable al parámetro e indicamos el tipo
    $consultaSelect -> bind_param("s", $nombre);

    // Ejecutamos la consulta
    if($consultaSelect -> execute()){
        
        // Obtenemos solo una fila, que será la persona
        $resultado = $consultaSelect -> get_result();
        $usuario = $resultado -> fetch_assoc();

        // Si no encuentra un registro con ese nombre, mostramos un mensaje
        if(!$usuario){
            exit("No hay resultados para ese nombre");
        }

        // Mostramos los datos de la persona
        echo "<h3>Datos de " . $usuario["nombre"] . ":<br></h3>";
        echo "Nombre: " . $usuario["nombre"] . "<br>";
        echo "Apellidos: " . $usuario["apellidos"] . "<br>";
        echo "Teléfono: " . $usuario["telefono"] . "<br>";
        echo "Edad: " . $usuario["edad"] . "<br>";

    } else {
        die("Ha ocurrido un error al ejecutar la consulta " . $consultaSelect -> error);
    }

    // Liberamos memoria y cerramos la conexión
    $resultado -> free();
    $mysqli_conexion -> close();

?>