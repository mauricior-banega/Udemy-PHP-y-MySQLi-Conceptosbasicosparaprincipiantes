<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 16.MySQLi-Conexión

*/

-->

<?php

include 'conexion.php';

 //Recibimos las variables del Formulario mediante estas declaraciones
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$ins = $con -> query ("INSERT INTO alumnos(id,nombre,paterno,materno) VALUES ('','$nombre','$paterno','$materno')");


if ($ins)
{
    echo "guardo";
}

else 
{ 
    echo "no guardo";
}

?>