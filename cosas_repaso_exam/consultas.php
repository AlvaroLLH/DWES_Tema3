<?php
//Vamos a poner que los alumnos tienen 3 carateristicas:
/*
-id
-nombre
-anos
-imagen

*/
//----------------------------------Consulta para borrar alumnos--------------------------------------------

$sqlB = "delate from alumnos where id_alumnos=$id_alumno";
$consultaB = $conexion->prepare($sqlB);
$consultaB->execute();

//-------------------------------------Consulta para modificar-----------------------------------------

$sqlM = "update alumnos set nombre=$nombre, año=$año where id=$id";
$consultaM = $conexion->prepare($sqlM);
    /*$url=<<URL de la imagen>>*/;
$consultaM->bindParam(":nombre", $nombre, PDO::PARAM_STR);
$consultaM->bindParam(":anos", $anos, PDO::PARAM_INT);
$consultaM->bindParam(":logotipo", $url, PDO::PARAM_LOB);
$consultaB->execute();

//-------------------------------------Agregar alumno---------------------------------

$sql = "insert into alumnos(nombre, anos, imagen) values(:nombre, :anos, :imagen)";
$ConsultaA = $conexion->prepare($sql);
$ConsultaA->bindParam(":nombre", $nombre, PDO::PARAM_STR);
$ConsultaA->bindParam(":anos", $anos, PDO::PARAM_INT);
$ConsultaA->bindParam(":logotipo", $url, PDO::PARAM_LOB);
$ConsultaA->execute();

//---------------------------------------Funcion conectarar a una BD------------------------------
function conexion()
{
    $servidor = 'mysql:dbname=<<Nombre de la BBDD>>; host=localhost';
    $usuario = 'root';
    $pw = '';
    try {
        $conexion = new PDO($servidor, $usuario, $pw);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado";
        return $conexion;
        
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
}
//-----------------------------------------Funcion para desconectar----------------------------
function desconexion($conexionBD)
{
    $conexionBD = null;
    echo "Desconexion completada";
}


//--------------------------------------Buscar repetido----------------------------------------
function buscar($conexion, $campo, $valor)
{
    $sql = "select $campo from <<Tabla de la base>> where <<Campo para el repetido>>=:<<Campo para el repetido>>";
    $consultaSelect = $conexion->prepare($sql);
    $consultaSelect->bindParam(":<<Campo para el repetido>>", $valor, PDO::PARAM_STR);
    if ($consultaSelect->execute()) {
        $verificar = $consultaSelect->fetch(PDO::FETCH_ASSOC);
        if ($verificar) {
            return true;
        } else {
            return false;
        }
    }
}
// ---------------------------------como subir archivos ----------------------------------------------

//-----------------foto--------------------


//---------html-------
?>


<label for="foto">foto</label>
<input id="foto" type="file" name="fichero">
<input type="submit" value="Subir fichero">


<?php
//------php---------
$foto = htmlspecialchars($_POST['foto']);

$fotoruta = "datosPersonales/" . $foto . ".png";

$res = move_uploaded_file($_FILES["fichero"]["tmp_name"], $fotoruta);

if ($res) {
    echo "La foto ha sido subida correctamente";
    echo "<br>";
} else {
    echo "Hubo un error al subir la foto";
    echo "<br>";
}

//-------------------------pdf-----------------------


//---------html-------
?>


<label for="curriculum">curriculum</label>
<input id="curriculum" type="file" name="curriculum">
<input type="submit" value="Subir fichero">

<?php
//---------php-------
$curriculum = htmlspecialchars($_POST['curriculum"']);

$curriculumruta = "datosPersonales/" . $curriculum . ".pdf";


$resCurriculum = move_uploaded_file($_FILES["curriculum"]["tmp_name"], $curriculumruta);

if ($resCurriculum) {
    echo "El currículum ha sido subido correctamente";
    echo "<br>";
} else {
    echo "Hubo un error al subir el currículum";
    echo "<br>";
}
?>