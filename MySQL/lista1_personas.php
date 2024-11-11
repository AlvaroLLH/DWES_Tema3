<?php

// lista1_personas.php

$conexion = mysqli_connect("localhost", "root", "", "pruebas");

// COMPROBAMOS LA CONEXIÓN
if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    exit();
}

// CONSULTA A LA BASE DE DATOS
$consulta = "select * from `persona ";

// Guarda los registros en un array
$listaPersonas = mysqli_query ($conexion, $consulta);

// COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
if ($listaPersonas) {

// RECORREMOS CADA RESULTADO QUE NOS DEVUELVE EL SERVIDOR
    foreach ($listaPersonas as $persona) {

// Recorremos el array asociativo
        echo "
            $persona [id]
            $persona [ nombre ]
            $persona [apellidos ]
            $persona [telefono]
            <br>
        ";

    }
}

?>