<!--ACTUALIZAR REGISTROS DE LA BASE DE DATOS: Ya creado este archivo hacemos la conexion al archivo conexion.php -->

<?php include 'conexion.php';

//Traemos el id desde formulario.php, en $id.
$id = $_REQUEST['id'];

//Seleccionamos la fila mediante un SELECT indicando la tabla y el id anteriormente obtenido.
$sel = $con -> query ("SELECT * FROM alumnos WHERE id='$id' ");

//Usamos IF en vez de WHILE ya que deseamos conocer los valores de columna de UNA SOLA FILA, no de todas.
if ($fila = $sel -> fetch_assoc())
{}

?>

<!--Copiamos y pegamos el HTML de formulario. Editamos algunas partes (eliminamos la tabla entre otras cositas) para que muestre inputs donde ingresaremos los nuevos valores de la fila de la tabla que seleccionamos.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Actualizar</title>
</head>
<body>  
        <form action="update.php" method="post">

            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" name="nombre" placeholder="Nombre del alumno" value="<?php echo $fila['nombre']?>"><br>
            <input type="text" name="paterno" placeholder="Apellido paterno" value="<?php echo $fila['paterno']?>"><br>
            <input type="text" name="materno" placeholder="Apellido materno" value="<?php echo $fila['materno']?>"><br>
            <input type="submit" value="Actualizar">

        </form>

        <!--Luego a este formulario con los datos que cargamos "actualizados" (menos el id que lo traemos desde el input hidden), deberemos de enviarlo a otra pagina, que no es ni guardar ni actualizar.php, sino que crearemos update.php que es quien mostrara en la TABLA con los valores ya actualizados. Entonces cambiamos el action del form de guardar.php a update.php que crearemos a acontinuacion. Seguimos en el otro archivo.-->

</body>
</html>