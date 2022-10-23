<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Practica 02</title>
</head>

<body>
    <?php
        if ($_SERVER[REQUEST_METHOD]=="POST"){
            $temp_nombre= depurar($_POST["nombre"]);
            $temp_apellidos=depurar($_POST["apellidos"]);
            $temp_dni=$_POST["dni"];

        //Validacion de nombre:
            if (empty($temp_nombre)){
                $err_nombre="El nombre es obligatorio.";
            }else{
                $pattern= "/^[a-zA-Z á-Ñ]+ $/";
        
                if (!preg_match($pattern,$nombre)){//si la variable nombre sigue el patron de la variable pattern
                    $err_nombre= "El nombre solo puede contener letras.";
                }else{
                    if(strlen($temp_nombre)>30){
                        $error_nombre="El nombre no puede tener mas de 30 caracteres.";
                    }else{
                        //Exito
                        $nombre= $temp_nombre;
                    }
                }
            }
        }

        //Validacion del DNI:
            if (empty($temp_dni)){
                $err_dni="El DNI es obligatorio.";
            }else{
                $pattern="/^ [0-9\.]{8} [a-zA-Z]$/";
                if (!preg_match($pattern,$temp_dni)){
                    $err_dni="El DNI debe tener 8 digitos y una letra.";
                }else{
                    $dni=$temp_dni;
                }
            }
        

        //Validar el precio:
        if(empty($temp_precio)){
            $err_precio= "El precio es obligatorio";
        }else{
            $temp_precio= filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
        }



        /* Validar: 
        - email (con filter-var)
        - fecha de nacimiento (sin input date) (dia, mes, año)
        (2 numeros, 2 numeros, 4 numeros) 03/12/2022
        -El día solo puede empezar por 0, 1, 2 , 3.
        -El mes por 0 o 1.
        -El año por 20 o 19.
        */

        //Validacion fecha:

        if (empty($_POST["anyo"])){
            $err_anyo= "El año es obligatorio.";
        }else{
            $pattern="";
        }if(!preg_match){

        }
    
        function depurar($dato){
            $dato=trim($dato);//elimina espacios en blanco.
            $dato=stripslashes($dato);//quita las barras de un string.
            $dato=htmlspecialchars($dato);
            return $dato;
        }
    
    ?>
    <form action="" method="POST">
        <p>DNI:
            <input type="text" name="dni">
        </p>
        <p>Nombre:
            <input type="text" name="nombre">
            <span class="error">
                *<?php if (isset($err_nombre)) echo $error_nombre?>
            </span>
        </p>
        <p>Apellido1:
            <input type="text" name="apellido1">
        </p>
        <p>Apellido2:
            <input type="text" name="apellido2">
        </p>
        <p>Edad:
            <input type=" " name="edad"> <!--Qué type??-->
        </p>
        <p>Email:
            <input type=
        </p>
        <p>
            <input type="submit" name="Enviar">
        </p>
    </form>
</body>

</html>