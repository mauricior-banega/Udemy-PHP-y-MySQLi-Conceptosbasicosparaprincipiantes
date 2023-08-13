<!-- 
    Curso de Udemy - Aprende PHP y MySQLi, conceptos básicos para principiantes.
    Tema: 15. Formularios

    Aclaracion del tema: Veremos como crear Formulario en PHP. 

    - Cabe aclarar que al crear un archico del tipo HTML no podremos incrustar codigo PHP. Pero si si lo creamos del tipo PHP, es decir de esa manera podremos trabajar con ambos lenguajes. Por eso creamos este archivo "formulario.php" que contendra codigo HTML embevido.

    - Creamos dos archivos .php (formulario y calculadora). La funcion es cargar dos numeros que seran extraidos a travez de POST en calculadora.php. Luego haremos dentro una funcion que realize operaciones segun el input radio que tenga la operacion a realizar. Creamremos dentro de ella un switch que segun la opcion elegida realizara la operacion y la mostrara tambien.

    -Si creamos radios como en este practico donde solo una de las 4 operaciones es posible realizar (que luego desde el switch elegiremos), hay que ponerle el mismo "name", ya que sino lo hacemos podremos elegir mas de una opcion, cosa que en este caso no queremos que suceda.

    - Archivo: formulario.php
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario HTML/PHP</title>

</head>
<body>

    <form action="calculadora.php" method="post">

        <input type="text" name="valor1" placeholder="Valor 1"><br>
        <input type="text" name="valor2" placeholder="Valor 2"><br>

        <input type="text" name="valor3" placeholder="Valor 3"><br>
        <input type="text" name="valor4" placeholder="Valor 4"><br>

        <input type="radio" name="operador" value="0">Suma<br>
        <input type="radio" name="operador" value="1">Resta<br>
        <input type="radio" name="operador" value="2">Multiplicación<br>
        <input type="radio" name="operador" value="3">División<br>

        <input type="submit" valu="Calcular">

    </form>

</body>
</html>