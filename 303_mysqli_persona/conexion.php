<?php

   // conexion.php

   $mysqli_conexion = new mysqli("localhost", "root", "", "pruebas");

   if($mysqli_conexion -> connect_errno){
    echo "Error de conexión con la base de datos: " . $mysqli_conexion -> connect_errno;
    exit;
   }

   return $mysqli_conexion;

   // Si estoy aquí es que la base de datos ha podido conectarse,
   // por lo que seguiré con el código de la página...
?>