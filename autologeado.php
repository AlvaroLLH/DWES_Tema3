<?php

/* Si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Si se introduce el usuario "usuario" y la clave "1234", redirige a una URL
    if($_POST['usuario'] === "usuario" and $_POST["clave"] === "1234"){        
        header("Location: https://www.google.es"); // Redirige a esta página

        // Si no, creamos la variable "err" declarada en 'true'
    }else{
        $err = true;
    }    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>        
        <meta charset = "UTF-8">
    </head>
    <body> 

    <!-- Si el valor de la variable "err" es true, nos salta un mensaje -->
        <?php if(isset($err)){
            echo "<p>Revise usuario y contraseña</p>";
        }?>

    <!-- Creamos el formulario usando la variable superglobal $_SERVER["PHP_SELF"],
    la cual contiene el nombre del fichero -->
        <form action = "<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST">
            <label for = "usuario">Usuario</label> 
            <input id = "usuario" name = "usuario" type = "text">                
            <label for = "clave">Clave</label> 
            <input id = "clave" name = "clave" type = "password">
            <input type = "submit">
        </form>

    </body>
</html>