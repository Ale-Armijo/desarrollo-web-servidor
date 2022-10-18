<h1>Ejercicio 6</h1>

<?php
    $n = $_GET["numero"];
    $resultado = 1;//se va acumulando el bucle.Debe estar fuera del bucle.
    
    if($n>=1){
        for ($i = 1; $i <= $n; $i++) {
        $resultado = $resultado * $i;
        //Alternativo  $resultado *= $i:
        }
        echo "<p>$resultado</p>";
    }else{
        echo"<p>El numero debe ser igual o mas que uno</p>";
    }
    //  $resultado = 1
    //  1º iteración -> $resultado * 1 = 1
    //  2º iteración -> $resultado * 2 = 2
    //  3º iteración -> $resultado * 3 = 6
    //  iº iteración -> $resultado = $resultado * $i
?>