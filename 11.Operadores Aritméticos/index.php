<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 11. Operadoress Aritméticos

    Aclaracion del tema: Veremos como se crean operaciones matemáticas tipicas en PHP. Suma, Resta/Multiplicacion/Divicion/Resto y Exponente al cubo.

-->

<?php 


    $val1= 100;
    $val2=10;

    echo $val1 + $val2; //Mostramos la SUMA de ambas variables (110).

    echo "<br>";
    // --------------------------------- 

    $val3= 100;
    $val4=10;

    echo $val1 * $val2; //Mostramos la MULTIPLICACIÓN de ambas variables (1000).

    echo "<br>";
    // ---------------------------------

    $val5= 100;
    $val6=10;

    echo $val5 / $val6; //Mostramos la DIVICIÓN de ambas variables (10).

    echo "<br>";
    // ---------------------------------

    $val7= 100;
    $val8=10;

    echo $val5 - $val6; //Mostramos la RESTA de ambas variables (90).

    echo "<br>";
    // ---------------------------------

    $val9= 100;
    $val10=9;

    echo $val9 % $val10; //Mostramos el RESTO de la DIVICIÓN entre ambas variables(90).

    echo "<br>";
    // ---------------------------------

    $val11= 5;
    $val12=5;

    echo $val11 ** $val12; //Mostramos la POTENCIA O EXPONENTE entre ambas variables. Seria 5 al cubo = (3125).

    echo "<br>";

?>