<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 03.Arrays
    
    Aclaracion del tema: Creamos un archivo index.php, sin el formato de HTML. Mostraremos como se crean Arrays o Arreglos. Ademas le creo comentarios aclarativos sobre cada caso/ej para ademas mostrar como se usa el br.
-->

<?php 
    
    echo "Ejemplo 1º: Array <br>"; //Descripcion de Ej + Salto de linea

    $frutas = array('manzanas','uvas','platanos','peras');

    echo $frutas[1]; //Muestra a 'uvas' del array.

    echo "<br><br>";
    echo "Ejemplo 2º: Consulta al Array mediante if/else <br>";

    /*Ahora creamos un if que pregunte su en la posicion 2º esta manzanas, si lo es mostrara  mediante echo "es correcto" o por lo contrario "es incorrecto". Muestra es "incorrecto".
    */

            if($frutas[2]=='manzanas')
            {
                echo "es correcto";
            }
            else
            {
                echo "es incorrecto";
            }

        
    echo "<br><br>";
    echo "Ejemplo 3º: Consulta al Array mediante Clave Valor <br>";
    

            $frutas2 = array ('clave1'=> 'manzanas', 'clave2' => 'uvas');

            echo $frutas2 ['clave2'];

    /* Esta es otra forma de mostrar los valores de un array, es como asignarle una etiqueta llamada CLAVE VALOR, esta se crea mediante comillas + el igual/mas similar a funcion flecha, seguido del valor contenido en el array.
        Luego podemos mostrar mediante eco el valor de ese arrar llamando a esa etiqueta y nos devuelve el valor al que apunta; en este caso muestra 'uvas'.
    */

    echo "<br><br>";
    echo "Ejemplo 4º: Consulta donde solo un valor del Array tiene Clave Valor <br>";

    $frutas3 = array('manzanas','uvas','clave'=> 'platanos','peras');

    echo $frutas3['pl'];
            
    /* Esto mostrara a platanos.*/
            

?>

<!-- 

-->