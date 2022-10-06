<h1>Ejercicios</h1>
<?php
    echo"<p>Esto funciona</p>";
    /*
    EJERCICIO 1
    generar 10 numeros aleatorios y mostrar 
    dichos numeros indicando si son pares o impares, mostrarlos en una lista
    1.Funcion rand
    2.Comprobar si es par o impar
    3.Immprimirlo en la lista.
    */
    /*EJERCICIO 2
    Imprimir los multiplos de 3 entre o y 50 en formato array.
    [3, 6, 9...30]
    */
    for($i =1; $i<=10;$i++):
        $numero_aleatorio= rand(1,10);
        if($numero%2==0):
            echo"<li>$numero_aleatorio es par</li>";
        else:
            echo"<li>$numero_aleatorio es impar</li>";
    endif;
    endfor;
    /*
    /*EJERCICIO 2
    Imprimir los multiplos de 3 entre o y 50 en formato array.
    [3, 6, 9...30]
    */
    
    $numeroMultiplo=50
        while ($numeroMultiplo <50){
            if ($numeroMultiplo %3==0){
                echo "<li>$numeroMultiplo</li>;
            }
            $numeroMultiplo++;
        }
?>