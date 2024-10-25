    <?php
    // Álvaro Llamas Huerta

    /*
    Escribe un programa que pida nombre, primer apellido, segundo apellido, DNI, email, fecha de nacimiento, teléfono, sexo,
    estudios (ESO, FP Grado Medio, Bachillerato, FP Grado Superior, Universitarios,...), idiomas, foto y currículum (se almacena
    con los nombres dni.png y dni.pdf en la carpeta datosPersonales) con el método POST. Pasa información "oculta" al enviar el
    formulario mediante un input del tipo hidden para el tamaño de ficheros. Después los mostrará por pantalla: nombre con apellidos,
    edad,...

    Establece un formato para toda esta información, una idea es que muestre el nombre en la parte superior, que el resto de datos
    estén en una tabla a la izquierda, la foto en la parte derecha de los datos, el currículum en la parte inferior.

    El ejercicio se hará separando la lógica: en el primer archivo crearemos el formulario para introducir los datos, y luego
    recogemos los datos y generamos la tabla con datos, foto y currículum en el segundo archivo
    */

    // Declaración de variables
    $nombre = $_POST["nombre"]; // Guardamos el nombre
    $primer_apellido = $_POST["primer_apellido"]; // Guardamos el primer apellido
    $segundo_apellido = $_POST["segundo_apellido"]; // Guardamos el segundo apellido
    $dni = $_POST["dni"]; // Guardamos el DNI
    $email = $_POST["email"]; // Guardamos el email
    $fecha_nacimiento = $_POST["fecha_nacimiento"]; // Guardamos la fecha de nacimiento
    $telefono = $_POST["telefono"]; // Guardamos el teléfono
    $sexo = $_POST["sexo"]; // Guardamos el sexo
    $estudios = [$_POST["estudios"]]; // Guardamos los estudios
    $idiomas = [$_POST["idiomas"]]; // Guardamos los idiomas
    $no_idiomas = empty($idiomas); // Guarda true o false dependiendo de si el array está o no vacío
    $foto = $_POST["foto"]; // Guardamos la foto
    $curriculum = $_POST["curriculum"]; // Guardamos el curriculum

    // Mostramos el nombre con los dos apellidos al principio
    echo "<h2>" . $nombre . " " . $primer_apellido . " " . $segundo_apellido . "<br></h2>";

    // Establecemos el contenedor principal para organizar el contenido en dos columnas
    echo '<div style="display: flex;">';

    // Colocamos la tabla con los datos personales a la izquierda
    echo '<div style="width: 50%;">';
    echo '<table border="1" style="width:100%; text-align: left;">';

        // Mostramos el DNI
        echo "<tr>";
            echo "<td><strong>DNI</strong></td>";
            echo "<td>" . $dni . "</td>";
        echo "</tr>";

        // Mostramos el email
        echo "<tr>";
            echo "<td><strong>Email</strong></td>";
            echo "<td>" . $email . "</td>";
        echo "</tr>";

        // Mostramos la fecha de nacimiento
        echo "<tr>";
            echo "<td><strong>Fecha de nacimiento</strong></td>";
            echo "<td>" . $fecha_nacimiento . "</td>";
        echo "</tr>";

        // Mostramos el teléfono
        echo "<tr>";
            echo "<td><strong>Teléfono</strong></td>";
            echo "<td>" . $telefono . "</td>";
        echo "</tr>";

        // Mostramos el sexo
        echo "<tr>";
            echo "<td><strong>Sexo</strong></td>";
            echo "<td>" . $sexo . "</td>";
        echo "</tr>";

        // Si se han seleccionado estudios, los mostramos recorriendo su array
        echo "<tr>";
            echo "<td><strong>Estudios</strong></td>";
            echo "<td>";
            foreach ($estudios as $valor) {
                echo $valor . ", ";
            }
            echo "</td>";
        echo "</tr>";

        // Si no se han seleccionado idiomas, mostramos un mensaje de error o los mostramos recorriendo su array
        echo "<tr>";
            echo "<td><strong>Idiomas</strong></td>";
            if(!$no_idiomas){
                echo "<td><strong>ERROR. No se ha seleccionando ningún idioma </strong></td>";
            } else {
                foreach ($idiomas as $valor) {
                    echo $valor . ", ";
            }
            }
        echo "</tr>";

    // Cerramos la tabla
    echo '</table>';
    echo '</div>';

    // Colocamos la foto a la derecha de los datos personales
    echo '<div style="width: 30%; text-align: center;">';
        echo '<img src="' . $foto . 'style="max-width: 100%; height: auto;"><br>';
    echo '</div>';

    // Mostramos el currículum debajo de la tabla
    echo '<div style="margin-top: 20px;">';
        echo '<a href="' . $curriculum . 'target="_blank">Ver Currículum (PDF)</a>';
    echo '</div>';

    ?>