<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 09. Operaciones con fecha

    Aclaracion del tema: Aqui veremos como expresar en PHP las fechas de distintas maneras mediante ".date".
-->

<?php 
    
    echo "Fecha del dia de hoy: ".date('d-m-Y'); #Si queremos dia/mes/año.
    echo "<br>";

    echo "El dia de hoy es: ".date('d'); #Si queremos dia.
    echo "<br>";

    echo "El mes abreviado, es: ".date('M'); #Si queremos mes abreviado; ej: Nov.
    echo "<br>";

    echo "El mes sin abreviar es: ".date('F'); #Si queremos mes completo, sin abreviar; ej: November (en ingles lo muestra)
    echo "<br>";

    echo "El nº de la semana actual: ".date('W'); #Si queremos el nº de semana actual; ej: 50.
    echo "<br>";

    echo "El nº del dia actual: ".date('w'); #Si queremos del dia actual; ej: 2, Siendo Lunes 1/Martes 2, etc.
    echo "<br>";

    echo "Cuantos dias tiene el mes actual: ".date('t'); #Si queremos saber cuantos dia tiene el mes actual; ej: 30, teniendo Nov 30/Diciembre 31, etc.
    echo "<br>";
    

    //Existen muchas otras formas de recupoerar datos en PHP, pero ya con estas podremos realizar muchas operaciones.

?>