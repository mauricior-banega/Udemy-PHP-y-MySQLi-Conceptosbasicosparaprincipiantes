<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 15. Formularios

    Aclaracion del tema: Veremos como crear Formulario en PHP. 

    - Archivo: calculadora.php
-->

<?php

//Para recibir el valor1 (de formulario.php), creamos una nueva variable a la que haremos llegar el valor mediante la declaracion "GET" o "POST" como veremos a continuacion.

$val1 = $_POST['valor1'];
$val2 = $_POST['valor2'];

$val3 = $_POST['valor3'];
$val4 = $_POST['valor4'];

$operador = $_POST['operador'];

function calcular($v1,$v2)
{
    $ope = $_POST['operador'];

    switch ($ope) {
        case 0:
                $res = $v1 + $v2;
                break;

        case 1:
                $res = $v1 - $v2;
                break;
            
        case 2:
                $res = $v1 * $v2;
                break;
                
        case 3:
                $res = $v1 / $v2;
                break;              
    }

    return $res; //IMPORecho "El resultado de la ".$operacion[$operador]." es: ".calcular($val1,$val2);TANTE: Sino le decimos al Switch que retorne el valor que tenga el resultado la funcion no lo podra mostrar cuando se la llame.
}

$operacion = array ('SUMA','RESTA','MULTIPLICACIÓN','DIVISIÓN');

//Como el echo de abajo solo muestra "El resultado es: " sin especificar resultado de que operacion es, creamos este array, indicando cada operacion y dado que la variable $operador tiene el dato de la opcion marcada (0,1,2 o 3) la usamos para indicarle al array que cadena quiero traer al mensaje que mostrara el echo de abajo, todo concatenado. Quedando de la sgte manera:

echo "El resultado de la ".$operacion[$operador]." es: ".calcular($val1,$val2);

echo "<br>";

echo "El resultado de la ".$operacion[$operador]." es: ".calcular($val3,$val4);

//Luego de esto ya hecho, crea otros 2 valores para cargar (valor3/valor4) entonce duplica los inputs radio y las variables para que alojen los valores. De esta manera nos mostrara 2 resultados de cada operacion realizada.
?>