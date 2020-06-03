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

    for($i=1; $i>=0; $i--){
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

    $z=0;

    while($z<=sizeof($familia2)){
        echo "<h2>$Familia2[$z] numero de elemento $z</h2>";
        $familia2++;
        echo "<br>";
    }
    
?>

</body>
</hmtl>