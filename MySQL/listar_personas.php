<?php

// listar_personas.php

// Conectamos
$mysqli_conexion = new mysqli("localhost", "root", "", "pruebas");

if ($mysqli_conexion->connect_errno) {
echo "Error de conexión con la base de datos: " . $mysqli_conexion->connect_errno;
exit;
}

// CONSULTA A LA BASE DE DATOS
$consulta = "select * from persona";
$resultado = $mysqli_conexion->query($consulta);
$numRegistros=$resultado->num_rows;
$listaPersonas=$resultado->fetch_all(MYSQLI_ASSOC);

echo "Número de registros: ". $numRegistros. "<br>";

if ($numRegistros > 0){

// Recorremos los resultados
foreach ($listaPersonas as $persona) {
echo "ID: " . $persona["id"] . "<br>";
}

} else {
// error
}

$resultado->free();
$mysqli_conexion->close();

?>