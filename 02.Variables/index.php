<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 02.Variables
    
    Aclaracion del tema: Creamops un archivo index.php, sin el formato de HTML. Mostraremos como se crean variables en PHP.
-->

<?php 
    
    $variable_uno=23;
    $variable_dos="hola";

    echo "Tengo ".$variable_uno." años";
    echo ("<br>");
    echo "$variable_dos".$variable_uno;
?>

<!-- 
-Podemos mostrar con "echo" encerrado entre comillas el mensaje a imprimir, tambien Variables ($variable_uno/$variable_dos) como en el ejemplo encerrado entre puntos.
-Tambien se pueden poner sin los puntos, sino entre comillas y concatenado entre puntos la otra variable.

-Salto de Linea: Se realiza como esta mas arriba: echo ("<br>");
-->