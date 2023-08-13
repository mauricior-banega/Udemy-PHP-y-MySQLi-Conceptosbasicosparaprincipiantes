
<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario - MySQLi</title>
</head>
<body>
        <form action="guardar.php" method="post">

            <input type="text" name="nombre" placeholder="Nombre del alumno"><br>
            <input type="text" name="paterno" placeholder="Apellido paterno"><br>
            <input type="text" name="materno" placeholder="Apellido materno"><br>
            <input type="submit" value="Guardar">

        </form>

        <table>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th></th>  <!--Hacemos 2 espacios, para despues al crear el enlace a BORRAR (como tr), este no quere amontonado. -->
            <th></th>

        <!--LEER REGISTROS DE LA BASE DE DATOS:

            -Ahora traemos los valores que aloja el SQLi mediante PHP. Realizamos un SELECT donde podemos pasar cada una de los valores que aloja: 

            query("SELECT id, nombre, paterno, materno")

            -O poner el * para traer a todos los valores de la table alumnos, sin necesidad de especificar uno por uno. Luego FROM alumnos, como en este caso.

            -Luego creamos un while para que recorra toda la tabla y nos lo muestre. El 2º corchete lo borramos para luego ponerlo al finalizar el los tr/td que creemos, que estaran fuera del cierre de php (?>).
        -->
            <?php
                $sel = $con ->query("SELECT * FROM alumnos");

                while ($fila = $sel -> fetch_assoc())
                {
 
            ?>
                <tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['paterno'] ?></td>
                    <td><?php echo $fila['materno'] ?></td>

                    <!--ACTUALIZAR REGISTROS DE LA BASE DE DATOS: Creamos el enlace EDITAR que se redigira al archivo actualizar.php y nos traera consigo el id correspondiente al la opcion seleccionada. Seguimos con la explicacion de actualizar en el archivo actualizar.php -->
                    <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
                    
                    <!--BORRAR REGISTRO DE LA BASE DE DATOS: Creamos el enlace BORRAR que se redigira al archivo borrar.php y nos traera consigo el id correspondiente al la opcion seleccionada. Seguimos con la explicacion de borrar en el archivo borrar.php -->
                    <td><a href="borrar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
                    
                </tr>

                <?php } ?> <!--Recien aca cerramos el } del while, poniendolo dentro de la etiqueta nueva php.-->
        </table>
</body>
</html>