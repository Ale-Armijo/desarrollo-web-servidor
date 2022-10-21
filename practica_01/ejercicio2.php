<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <title>Ejercicio 2</title>
</head>
<h2>Crea un formulario que compruebe si un DNI es válido.</h2>
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
                    echo "Dni de longitud no válida.";
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