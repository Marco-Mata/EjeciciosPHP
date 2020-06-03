<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<form>
        Escribe tu numero:
        <input name ="numero" type ="text" placeholder = "Escribe un numero">
        
        <input type="submit" value ="Registrar">
    </form>

<?php
    header("content-type: text/html;charset=\utf-8\"");

    echo "<h1>".$_GET['numero']."</h1>";
    if (is_numeric($_GET['numero']) && $_GET['numero'] >=1)
    {
        if($_GET['numero']%2 !=0)
        {
            echo "<h2> Es un numero Primo".$_GET['numero']."</h2>";
        }
        else{
            echo "<h2> No es un numero primo".$_GET['numero']."</h2>";
        }
    }
    else{
        echo "<h2> Ingrese un numero mayor de Cero </h2>";
    }

?>


</body>
</hmtl>