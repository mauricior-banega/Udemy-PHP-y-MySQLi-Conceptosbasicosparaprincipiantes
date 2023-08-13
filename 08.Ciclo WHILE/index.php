<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 08. Ciclo WHILE

    Aclaracion del tema: Al igual que en JavaScript, un ciclo WHILE se ejecuta de forma similar como veremos a continuacion. 
-->

<?php 
    
    $i=0;

    while ($i <= 10) {
        echo $i;
        echo "<br>";
        $i++;
    }

    /* Como sabemos, el ciclo WHILE va a realizar la condificion de mostrar el valor de i en este caso y sumara +1 cada vez que lo realize, 11 veces (porque empieza desde 0). Mostrara lo sgte:

        0
        1
        2
        3
        4
        5
        6
        7
        8
        9
        10
        
    */

?>

