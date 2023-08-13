<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 14. Funciones

    Aclaracion del tema: Veremos como crear una funcion super basica en PHP. 
-->

<?php 

    function sum($var1,$var2)
    {
        $suma = $var1 + $var2;
        return $suma;
    }

    $num1=100;
    $num2=20;

    echo sum($num1,$num2);

?>