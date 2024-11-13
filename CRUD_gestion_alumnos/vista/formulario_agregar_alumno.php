<?php

    $titulo = "formulario_agregar_alumno";
    include("encabezado.php");

    // Formulario que permite agregar un nuevo registro a nuestra tabla, que llamara a agregar_alumno

    echo '<h3>Formulario</h3>';

    echo '<form action="" method="get">';

    echo '<p><label for="dni">DNI</label>';
    echo '<input type="text" name="dni" id="dni" required></p>';

    echo '<p><label for="nombre">Nombre</label>';
    echo '<input type="text" name="nombre" id="nombre" required></p>';

    echo '<p><label for="apellido1">1º Apellido</label>';
    echo '<input type="text" name="apellido1" id="apellido1" required></p>';

    echo '<p><label for="apellido2">2º Apellido</label>';
    echo '<input type="text" name="apellido2" id="apellido2" required></p>';

    echo '<p><label for="email">Email</label>';
    echo '<input type="email" name="email" id="email" required></p>';

    echo '<p><label for="telefono">Teléfono</label>';
    echo '<input type="tel" name="telefono" id="telefono" required></p>';

    echo '<p><label for="curso">Curso</label>';
    echo '<input type="number" name="curso" id="curso" required></p>';

    echo '<p><input type="submit" value="Agregar alumno"></p>';

    include("pie.php");
?>