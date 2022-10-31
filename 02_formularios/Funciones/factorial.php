<?php
/*Viene del ejercicio 6.      Factorial 5!=1×2×3×4×5=120.*/
    function factorial(int $numero){
        $resultado= 1;
            for ($i = 1; $i <= $numero; $i++) {
            $resultado = $resultado * $i;
            }
            return $resultado;
    }
?>