<?php

    // Conectamos a la base de datos
    include("conexion.php");

    // Validamos que el parámetro GET esté presente y sea numérico
    if(!isset($_GET["id_persona"]) || !is_numeric($_GET["id_persona"])){
        exit("ID no válido");
    }

    // Consulta a la base de datos(convertimos a entero)
    $id_persona = intval($_GET["id_persona"]);

    // Preparamos la select
    $consultaSelect = $mysqli_conexion -> prepare("SELECT * FROM persona WHERE id_persona = ?");

    // Vinculamos la variable al parámetro e indicamos el tipo
    $consultaSelect -> bind_param("i", $id_persona);

    // Ejecutamos la consulta
    if($consultaSelect -> execute()){

        // Obtenemos solo una fila, que será la persona
        $resultado = $consultaSelect -> get_result();
        $usuario = $resultado -> fetch_assoc(); // Guardamos el resultado en un array asociativo

        if(!$usuario){
            exit("No hay resultados para ese ID");
        }

        // Mostramos los datos de la persona
        echo "<h3>Datos de la persona con el ID " . $usuario["id_persona"] . ":<br></h3>";
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