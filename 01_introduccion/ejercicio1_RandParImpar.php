<h1>Ejercicio Funcion Rand y Par/Impar</h1>

<p>EJERCICIO 1:
    Generar 10 numeros aleatorios y mostrar
    dichos numeros indicando si son pares o impares, mostrarlos en una lista
    1º.Funcion rand
    2º.Comprobar si es par o impar
    3º.Immprimirlo en la lista.</p>


<li>
    <?php
    for($i=1; $i<=10; $i++):
        $nAleatorio= rand(1,10);//Se crea un n aleatorio
        if($nAleatorio %2 == 0):// %2=0 son pares
            echo "<p>El numero $nAleatorio es par.</p";
        else:
            echo "<p>El numero $nAleatorio es impar.</p";
        endif;
    endfor; 
?>
</li>