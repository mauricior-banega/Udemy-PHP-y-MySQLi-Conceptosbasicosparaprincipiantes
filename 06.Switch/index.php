<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 06. Switch

    Aclaracion del tema: Al igual que en JavaScript, un Switch se ejecuta de forma similar como veremos a continuacion. Como vimos, Switch viene a reemplaza y a hacer mas facil el crear ciclos repetitivos if/else if constantes para crear nuestro codigo. Explicamos
-->

<?php 
    
    $opc = 2; //Variable que aloja un nº pero puede ser letra/cadena o cualquier tipo de dato que se necesite usar.

    switch ($opc)
    {
        case 1: 
        case 2:
            echo "valor es 1 o 2"; #Podemos meter en una misma condicion para 2 casos que son similares (caso 1 como caso 2).
            break;

        case 3:
            echo "valor es 3";
            break;
    }

?>