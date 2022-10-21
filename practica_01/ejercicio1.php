<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "styles.css"/>
    <title>Numeros primos</title>
</head>
<h2>Crea un formulario que reciba dos números “a” y “b”.
     El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”.</h2>
<body>
    <form action="ejercicio1.php" method="POST">
        <label>¿Cuantos nºprimos quieres ver por pantalla?:</label>
        <input type="text" name="numero1">
        <br><br>
        <label>Introduce otro numero desde el cual comenzar:</label>
        <input type="text" name="numero2">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nCantidad=$_POST["numero1"];
        $nComienzo=$_POST["numero2"];
        $contador=0;//incrementa cada vez que encuentra un nº primo
        $i=2;

        while($contador<$nCantidad){

            if($i>=$nComienzo){
                echo "$nComienzo ";
                $nComienzo++;
                $contador++;
                $i = 2;
            }
            else if($nComienzo%$i==0){//No es primo
                $nComienzo++;// suma para cambiar de numero al siguiente
                $i=2;// $i vuelve al valor inicial.
            }
            else{
                $i++;
            }
                              
        }

    }
    ?>
</body>

</html>