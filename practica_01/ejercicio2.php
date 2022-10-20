<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="POST">
        <label>Introduce un DNI:</label>
        <input type="text" name="nDNI">
        <br><br>
        <input type="submit" value="Enviar">

    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $dni=$_POST["nDNI"];


            if(strlen($dni)==9){

                $numeros=(int)substr($dni,0,8);
                
                if(strlen($numeros) != 8){
                    echo "Dni no valido.";
                }
                else{
                    echo "Dni valido.";
                }
            }
            else {
                echo "DNI no valido";
            }
        }
    ?>

</body>
</html>