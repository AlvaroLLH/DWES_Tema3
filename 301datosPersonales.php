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

    // Mostramos el nombre con los dos apellidos al principio
    echo "<h2>" . $_POST["nombre"] . " " . $_POST["primer_apellido"] . " " . $_POST["segundo_apellido"] . "<br></h2>";

    // Establecemos el contenedor principal para organizar el contenido en dos columnas
    echo '<div style="display: flex;">';

    // Colocamos la tabla con los datos personales a la izquierda
    echo '<div style="width: 50%;">';
    echo '<table border="1" style="width:100%; text-align: left;">';

        // Mostramos el DNI
        echo "<tr>";
            echo "<td><strong>DNI</strong></td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        // Mostramos el email
        echo "<tr>";
            echo "<td><strong>Email</strong></td>";
            echo "<td>" . $_POST["email"] . "</td>";
        echo "</tr>";

        // Mostramos la fecha de nacimiento
        echo "<tr>";
            echo "<td><strong>Fecha de nacimiento</strong></td>";
            echo "<td>" . $_POST["fecha_nacimiento"] . "</td>";
        echo "</tr>";

        // Mostramos el teléfono
        echo "<tr>";
            echo "<td><strong>Teléfono</strong></td>";
            echo "<td>" . $_POST["telefono"] . "</td>";
        echo "</tr>";

        // Mostramos el sexo
        echo "<tr>";
            echo "<td><strong>Sexo</strong></td>";
            echo "<td>" . $_POST["sexo"] . "</td>";
        echo "</tr>";

        // Mostramos los estudios
        echo "<tr>";
            echo "<td><strong>Estudios</strong></td>";
            echo "<td>" . $_POST["estudios"] . "</td>";
        echo "</tr>";

        // Mostramos los idiomas
        echo "<tr>";
            echo "<td><strong>Idiomas</strong></td>";
            echo "<td>" . $_POST["idiomas"] . "</td>";
        echo "</tr>";

    echo '</table>';
    echo '</div>';

    // Colocamos la foto a la derecha de los datos personales
    echo '<div style="width: 30%; text-align: center;">';
        echo '<img src="datosPersonales/' . $_POST["foto"] . 'alt="Foto de perfil" style="max-width: 100%; height: auto;"><br>';
    echo '</div>';

    echo '</div>'; // Cierre del contenedor principal

    // Mostramos el currículum debajo de la tabla y la foto
    echo '<div style="margin-top: 20px;">';
        echo '<a href="datosPersonales/' . $_POST["curriculum"] . 'target="_blank">Ver Currículum (PDF)</a>';
    echo '</div>';

    ?>