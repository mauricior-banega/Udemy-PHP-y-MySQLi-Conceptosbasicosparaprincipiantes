<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 16.MySQLi-Conexión

    Aclaracion del tema: Vamos a crear una conexion a MySqli mediante el uso de PHP.

    Mediante este codigo realizamos la conexion. Aclaramos que para cada archivo que creemos estos van a tener que contener este trozo de codigo y puede ser tedioso el repetirlo, e incluso si tenemos que modificarlo, para casos donde por ejemplo 20 archivos tengan la misma conexion. 

    Entonces lo que hacemos es, crear la conexion en este archivo, pero en los demas solamente poner:

        include 'conexion.php';

     Eso equivaldria a colocar todo esto en cada archivo

        $con = new mysqli('locahost','root','','curso');

*/

-->

<?php


$con = new mysqli('localhost:3306','root','','curso');

?>

