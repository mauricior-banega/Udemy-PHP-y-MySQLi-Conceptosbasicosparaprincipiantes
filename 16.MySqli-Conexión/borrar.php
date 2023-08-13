<!--BORRAR REGISTRO DE LA BASE DE DATOS -->

<?php include 'conexion.php';

//Traemos el id desde formulario.php, en $id.
$id = $_REQUEST['id'];

//ELIMINAMOS mediante DELETE indicando la tabla y el id anteriormente obtenido.
$del = $con -> query("DELETE FROM alumnos WHERE id ='$id' ");

//

if ($del){
    echo "<script>
    location.href='formulario.php';
    </script>";
}

else
{
    echo "<script>
    alert('El registro no pudo ser eliminado');
    location.href='formulario.php';
    </script>";
}

?>
                    