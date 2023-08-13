<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 10. Operadoress Lógicos

    Aclaracion del tema: Explicamos como se utiliza en PHP operadores logicos AND/OR, es de forma similar a como se utiliza en JS.

-->

<?php 

    $a=1;
    $b=2;

    echo "Operador AND: ";

        if ($a == 1 AND $b == 2 ) { 

            //Mostrara que cumple la condicion con AND, porque ambas se cumplen.
            echo "Cumple la condificion";
        }
        else 
        {
            echo "No cumple la condicion";
        }

        echo '</br>';

    //-----------------------------------------------------------

    $c=1;
    $d=2;

    echo "Operador OR: ";

        if ($c == 8 OR $d == 2 ) { 

            //Mostrara que cumple la condicion con OR porque una de ellas se cumple.
            echo "Cumple la condificion";
        }
        else 
        {
            echo "No cumple la condicion";
        }

        echo '</br>';
        
    //-----------------------------------------------------------
    

    $e=3;
    $f=5;

    echo "Operador Xor: ";

        if ($e == 3 Xor $f == 5 ) { 

            //Mostrara que cumple la condicion con Xor cuando uno de ellos es verdadero, pero NO AMBOS VERDADEROS.

            echo "Cumple la condificion";
        }
        else 
        {
            echo "No cumple la condicion";
        }

        echo '</br>';
    
?>