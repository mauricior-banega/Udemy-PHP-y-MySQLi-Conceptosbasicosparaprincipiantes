<!--ACTUALIZAR REGISTROS DE LA BASE DE DATOS: Este archivo update.php toma los valores nuevos cargados en actualizar.php y los subira a la tabla de la base de datos para posteriormente verlo en el formulario. En caso de que no pueda subir estos datos nos re-dirigira al archivo de actualizar nuevamente trayendo consigo el id que antes habiamos elegido. Veremos como se realiza: -->

<?php include 'conexion.php';

//Recibimos las variables del Formulario Actualizar, mediante estas declaraciones.
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

//Aca se realiza la actualizacion "UPDATE" de los campos y id indicado.
$up = $con -> query("UPDATE alumnos SET nombre='$nombre', paterno='$paterno', materno='$materno' WHERE id='$id' ");

//Este IF pregunta si es cierto $up osea si funcionó, si lo hizo nos re-dirigira al archivo formulario.php y sino a actualizar.php + el alumno de id que elegimos previamente editar, que lo indicamos con este trozo de codigo ?id=".$id."

if ($up){
    echo "<script>
    location.href='formulario.php';
    </script>";
}

else
{
    echo "<script>
    location.href='actualizar.php?id=".$id."';
    </script>";
}

?>