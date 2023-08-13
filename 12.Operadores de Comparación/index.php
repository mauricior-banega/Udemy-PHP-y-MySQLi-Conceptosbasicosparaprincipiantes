<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 12. Operadores de Comparación.

    Aclaracion del tema: Veremos cada uno de los O. de Comparacion aplicado a distintos casos de uso.
-->

<?php 

/*
    == Igual
    === Identico
    != Diferente <>
    !== No identico
    <= Menor igual que 
    >= Mayor igual que
    < Menor que
    > Mayor que

    -Ejemplificamos cada uno:
*/
        $var =2;

        if ($var == 2)
        {
            echo "Cumple la tarea";
        }
        else
        {
            echo "No cumple la tarea";
        }

        echo "<br>";
        /*En este caso da que "Cumple la tarea" ya que es == la $var, es de valor 2 y del tipo numerico.
        -------------------------------------------------------------------------*/
        $var1 = 2;

        if ($var1 === "2")
        {
            echo "Cumple la tarea";
        }
        else
        {
            echo "No cumple la tarea";
        }

        echo "<br>";
        /*En este caso da que "No cumple la tarea" ya que NO es === la $var, es de valor 2, si, pero no del tipo numerico sino caractér.
        -------------------------------------------------------------------------*/

        $var2 = 2;

        if ($var2 != 2)
        {
            echo "Cumple la tarea";
        }
        else
        {
            echo "No cumple la tarea";
        }

        echo "<br>";
        /*En este caso da que "No cumple la tarea" ya que la $var es el mismo valor 2. Si fuese otro valor distinto de 2 daria que si "Cumple la tarea".
        -------------------------------------------------------------------------*/

        $var3 = 3;

        if ($var3 > 2)
        {
            echo "Cumple la tarea";
        }
        else
        {
            echo "No cumple la tarea";
        }

        echo "<br>";
        /*En este caso da que "Cumple la tarea" ya que la $var es mayor que 2. Y daria que no cumple si fuese menor <.
        -------------------------------------------------------------------------*/


?>