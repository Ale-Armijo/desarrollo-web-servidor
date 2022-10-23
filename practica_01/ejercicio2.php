<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
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
            if(strlen($dni)==9){//Comprobamos si tiene 9 caracteres.
                $numeros=(int)substr($dni,0,8);//Se crea variable para almacenar los nº del DNI.
                
                if(strlen($numeros) != 8){//Si es distinto de ocho da error.
                    echo "Dni de longitud no válida.";
                }
                else{
                    $divDni=$numeros%23;//Variable que almacena el resto de dividir los nº entre 23.
                    $letraDni=STRTOUPPER(substr($dni,8,1));//coge la letra del DNI

                    $comprobarLetra=match($divDni){//Variable que almacena la comprobacion del resto.
                            0 => "T",
                            1 => "R",
                            2 => "W",
                            3 => "A",
                            4 => "G",
                            5 => "M",
                            6 => "Y",
                            7 => "F",
                            8 => "P",
                            9 => "D",
                            10 =>"X",
                            11=> "B",
                            12=> "N",
                            13=> "J",
                            14=> "Z",
                            15=> "S",
                            16=> "Q",
                            17=> "V",
                            18=> "H",
                            19=> "L",
                            20=> "C",
                            21=> "K",
                            22=> "E",
                            default=>"",
                    };

                    if($letraDni==$comprobarLetra){//Comparacion de letras, la escrita por el usuario y la calculada en la division.
                        echo "El DNI es valido.";
                    }else{
                        echo "DNI no válido.";
                    }
                        
                }
            }
            else {
                echo "DNI no valido";
            }
        }
    ?>
</body>

</html>