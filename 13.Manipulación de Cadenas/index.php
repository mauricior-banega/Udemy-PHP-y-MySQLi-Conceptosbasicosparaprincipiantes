<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 13. Manipulacion de Cadenas

    Aclaracion del tema: Veremos varios casos donde usaremos distintas formas de obtener informacion e incluso modificar cadenas. Exiten aprox de de estas pero veremos solo algunas pero podemos investigar todas a modo de aprendizaje.
-->

<?php 

    $cadena= "hola mundo";

    echo strlen($cadena); //Muestra el nº de caracteres de la cadena.
    echo "<br>";

    echo str_replace('h', 'H',$cadena); //Reemplaza y muestra el valor 'h' de la cadena por 'H'. Si fuese la o, cambiaria a 'O' mayus a TODAS las o de la cadena.
    echo "<br>";

    echo strtolower($cadena); //Reemplaza cada caracter de la cadena a Minúsculas.
    echo "<br>";

    echo strtoupper($cadena); //Reemplaza cada caracter de la cadena a Mayúsculas.
    echo "<br>";

    echo substr($cadena, 0,4); //Muestra desde la posicion 0 (indicado en 1º lugar) hasta 4 lugares posteriores. En este caso la palabra completa "hola".
    echo "<br>";

    //Si quisieramos mostrar la palabra "mundo", posisionamos en 5º y luego indicamos cuantos lugares posteriores mostrar, en este caso 5. Y muestra "mundo"

    echo substr($cadena, 5,5);
    echo "<br>";

?>