<?php

    // Verificamos si se han enviado tanto el usuario como la clave
    if(isset($_POST['usuario'], $_POST['clave'], $_POST['edad'])) { // Deben existir ambos 

        // Mostramos el usuario y la clave introducidas
        echo "Usuario introducido: " . $_POST['usuario'] . "<br>";
        echo "Clave introducida: " . $_POST['clave'] . "<br>";
        echo "Edad introducida: " .$_POST['edad'] . "<br>";
        
        // Mostramos el mensaje de saludo
        echo "<br>Hola " . $_POST['usuario'] . ", tienes " . $_POST['edad'] . " años";    

    } else {

        // Si falta alguno de los campos, mostramos el error
        echo "<br>Error, falta el nombre y/o la clave";
    }

?>