<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<?php

    header("content-type: text/html;charset=\"utf-8\"");

    for($i=1; $i<=10; $i++){
        echo "<p>$i</p>";
    }
    echo "<p>finaliza el ciclo for</p>";

    for($i=1; $i=>0; $i--){
        echo "<p>$i</p>";
    }
    echo "<p>finaliza el ciclo for</p>";

    $Familia = array("Maria","Ana","Jose", "Pedro");

    for($i=0; $i<=sizeof($Familia);$i++){
        echo "<h2>$Familia[$i] numero de elemento $i </h2>";
        echo "<br>";
    }

    //ciclio while
    $Familia2 = array("Maria","Ana","Jose", "Pedro"); 

    $i=0;

    while($i<=sizeof($familia2)){
        echo "<h2>$Familia2[$i] numero de elemento $i</h2>";
        $familia++;
        echo "<br>";
    }
    


?>
</body>
</hmtl>