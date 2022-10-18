<h1>Ejercicio 4</h1>

<?php
    $base = (int)$_POST["base"];
    $exponente = (int)$_POST["exponente"];

    $resultado = 1;

    for ($i = 1; $i <= $exponente; $i++) {
        $resultado = $resultado * $base;
    }

    echo "<p>El resultado es $resultado</p>";

    /*
        Base = 2
        Exponente = 3

        2^3 = 2*2*2 = 8

        //  $resultado = 1
        //  1º iteración - 1*2 = 2
        //  2º iteración - 2*2 = 4
        //  3º iteración - 4*2 = 8
    */
?>