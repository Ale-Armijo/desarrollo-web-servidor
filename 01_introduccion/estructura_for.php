<h1>Estructura For</h1>
<ul>
<?php
    /*for($i = 1; $i<=10; $i++){
        echo "<li>$i</li>";
    }

    Mediante for mostrar la secuencia 5,10, 15...hasta 50 
    for ($i = 5; $i<=50; $i++){
        if ($i% 5 ==0){
            echo "<li>$i</li>";
        }
    }*/
    for ($i = 5; $i<=100; $i+=5){
            echo "<li>$i</li>";
        }
    /**Generar dos numeros aleatorios, uno entre 1 y 10 y otro entre 11 y 20.
     * Crear un bucle for que se ejecute entre el primer numero y el segundo.
     * a=4   b=12
     * Resultado: 4, 5, 6, 7...12
     */
?>
</ul>
<br><br>
<?php
    $a = rand (1,10);
    $b= rand (10,20);
    echo "<p>A=$a</p>";
    echo "<p>B=$b</p>";
    for ($i = 1; $i<=10; $i++){
        echo "<li>$i</li>";
    }
?>