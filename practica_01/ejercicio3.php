<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "stilo.css">
    <title>Tablas de multiplicar</title>
</head>
<body>
    <h2>Genera de manera dinámica las tablas de multiplicar del 1 al 10</h2>

    <?php

    /*for($i=1; $i<=10;$i++){
        echo "$i - ";
        for($a=1;$a<=10;$a++){
            echo $a;
        }
        echo "<br>";
    }*/

    for($i=1;$i<=4;$i++){

        for($a=4;$a>=$i;$a--){

            echo " *";
        }
        echo "<br>";
    }

    for($i=1; $i<=10;$i++){
        echo "<table id='tabla" . $i . "'>";
        echo "<tr><td>Tabla del $i</td></tr>";
        for($a=1;$a<=10;$a++){
            echo "<tr><td>$i x $a = " . $i*$a . "</td></tr>";
        }
        echo "</table>";//crea una tabla nueva en cada iteracion
        echo "<br>";
    }

    ?>
</body>
</html>