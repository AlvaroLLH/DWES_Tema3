<?php

    // Declaramos el título y la hoja de estilos
    $titulo = "Agregar Cliente";
    $estilo = "../vista/css/estiloFormulario.css";

    // Incluimos el encabezado
    include("encabezado.php");

?>

<!-- Mostramos el título -->
<h1><?= $titulo ?></h1>

<!-- Enlazamos la hoja de estilos -->
<link rel="stylesheet" href="<?= $estilo ?>">

<!-- Creamos el formulario -->
<form action="../controlador/agregar_cliente.php" method="POST">

    <!-- Campo para el nombre -->
    <label for="nombre">
        <p>Nombre:</p><input type="text" name="nombre" id="nombre" required>
    </label>

    <!-- Campo para el apellido -->
    <label for="apellido">
        <p>Apellido:</p><input type="text" name="apellido" id="apellido" required>
    </label>

    <!-- Campo para el email -->
    <label for="email">
        <p>Email:</p><input type="email" name="email" id="email" required>
    </label>

    <!-- Campo para el teléfono -->
    <label for="telefono">
        <p>Teléfono:</p><input type="tel" name="telefono" id="telefono" required>
    </label>

    <!-- Campo para la direccion -->
    <label for="direccion">
        <p>Dirección:</p><input type="text" name="direccion" id="direccion" required>
    </label>

    <!-- Campo para la fecha de registro -->
    <label for="fecha_registro">
        <p>Fecha de registro:</p><input type="date" name="fecha_registro" id="fecha_registro" required>
    </label>

    <!-- Botón para enviar -->
    <label for="enviar">
        <p><input type="submit" value="Enviar"></p>
    </label>

</form>

<?php

    // Incluimos el pie de página
    include("pie.php");

?>