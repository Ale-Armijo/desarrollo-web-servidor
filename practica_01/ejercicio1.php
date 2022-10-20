<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio1.php" method="POST">
        <label>Introduce un numero:</label>
        <input type="text" name="numero1">
        <br><br>
        <label>Introduce otro numero:</label>
        <input type="text" name="numero2">
        <br><br>
        <input type="submit" value="Enviar">

    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nCantidad=$_POST["numero1"];
        $nComienzo=$_POST["numero2"];
        $contador=0;
        $i=2;

        while($contador<$nCantidad){

            if($i==$nComienzo){
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