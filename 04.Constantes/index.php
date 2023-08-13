<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 04.Constantes
    
    Aclaracion del tema: En esta clase veremos la creacion/utilizacion de una constante, donde no cambia su valor una vez definida. Ocupa menos espacio en memoria que una variable y por eso es importante de conocer. Veremos como se define a continuacion.
-->

<?php 
    
    define ('constante','hola');
    echo constante; //Esto imprime hola

    /*En caso de querer modificarla por otro valor dara error "Warning: Constant constante already defined in E:\Facultad\Programas\XAMPP\htdocs\Estudios\UDEMY - Aprende PHP y MySQLi, conceptos básicos para principiantes\04.Constantes\index.php on line 15
    hola". 
    
    Explicamos con un ejemplo comentado:

            define ('constante','buen dia');
            echo constante;

    */

    

?>

