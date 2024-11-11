<?php

// Conectamos a la base de datos
// ....

// Leemos los datos de formulario, por ejemplo: nombre y edad
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];

// Preparo la consulta de insert
$consultaInsert=$conexion->prepare("insert into persona(nombre, edad) value( ?,? )");

// Vinculo la variable al parámetro indicando tipo de valor, s para string, i para int
$consultaInsert->bind_param("si", $nombre, $edad);

// Ejecutamos la consulta, se asigna el valor al parámetro
if($consultaInsert->execute()){

// Todo correcto
// Aquí podemos redireccionar a un listado de los datos:
// header("Location: listar_personas.php");

} else {
// Error
}

// Desconectamos
$conexion->close();

?>