<h1>Mi primer programa en PHP</h1>
<h1>Con el h1 escribimos el encabezado</h1>
<?php
    echo "<h3>!Hola mundo!</h3>";
    
    $numero_entero= 3;//con dolar creamos una variable
    echo"<p>$numero_entero</p>";//echo imprime
    var_dump($numero_entero);//devuelve info de la variable
    echo "<br>";//mete un salto de linea
    //print_r($numero_entero);
    
    $numero_decimal=2.5;//con dolar creamos una variable
    echo "<p>El numero decimal es $numero_decimal</p>";
    var_dump($numero_decimal);//var_dump devuelve info de la variable.

    echo "<br><br>";//br es salto de linea

    $numero_largo=13151656519999999999656;
    echo "<p>El numero largo es $numero_largo</p>";
    var_dump($numero_largo);//var_dump devuelve info de la variable

    $cadena= "Hola,¿qué tal?";//con dolar creamos una variable
    echo"<p>El string es $cadena</p>";
    var_dump($cadena);

    echo "<br></br>";//br es para hacer un salto de linea.
    $boleano= true;
    var_dump($boleano);
    print_r($boleano);
?>