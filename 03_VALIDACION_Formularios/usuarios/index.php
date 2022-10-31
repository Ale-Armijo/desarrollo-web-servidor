<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Usuarios</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $temp_nombre= depurar($_POST["nombre"]);
            $temp_apellidos= depurar($_POST["apellidos"]);
            $temp_dni= depurar($_POST["dni"]);
            $temp_email=depurar($_POST["email"]);
            $temp_anyo= depurar($_POST["anyo"]);


            //Validacion de nombre:
            if (empty($temp_nombre)){
                $err_nombre= "El nombre es obligatorio.";
            }else{
                $pattern= "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
                if (!preg_match($pattern,$temp_nombre)){//si la variable nombre sigue el patron de la variable pattern
                    $err_nombre= "El nombre solo puede contener letras.";
                }else{
                    if(strlen($temp_nombre)>30){
                        $err_nombre="El nombre no puede tener mas de 30 caracteres.";
                    }else{
                        //Exito
                        $nombre= $temp_nombre;
                    }
                }
            }
        
            //Validacion del apellido:
            if (empty($temp_apellidos)){
                $err_apellidos="El apellido es obligatorio.";
            }else{
                $pattern= "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
                if (!preg_match($pattern,$temp_apellidos)){//si la variable nombre sigue el patron de la variable pattern
                    $err_apellidos= "El apellido solo puede contener letras.";
                }else{
                    if(strlen($temp_apellidos)>30){
                        $err_apellidos="El apellido no puede tener mas de 30 caracteres.";
                    }else{
                        //Exito
                        $apellidos= $temp_apellidos;
                    }
                }
            }


            //Validacion del DNI:
            if (empty($temp_dni)){
                $err_dni="El DNI es obligatorio.";
            }else{
                $pattern="/^[0-9]{8}[a-zA-Z]$/";
                if (!preg_match($pattern,$temp_dni)){
                    $err_dni="El DNI debe tener 8 digitos y una letra.";
                }else{
                    $dni=$temp_dni;
                }
            }
        

            /*   Validar el precio:
            if(empty($temp_precio)){
                $err_precio= "El precio es obligatorio";
            }else{
                $temp_precio= filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
            } */

    
            //Validacion del email
            if(empty($temp_email)){
                $err_email= "El email es obligatorio";
            }else{//FILTER devuelve false cuando no sigue el filtro que hemos pasado.
                //Devuelve el propio valor si cumple con el filtro.
                $temp_email= filter_var($temp_email, FILTER_VALIDATE_EMAIL);
                if(!$temp_email){//Aquí no pasa el filtro.
                    $err_email= "El email no es válido.";
                }else{//Aquí sí pasa el filtro.
                    $email= $temp_email;
                }
            }
            //Validadacion de Fecha de Nacimiento
            if(empty($_POST["anyo"])){
                $err_anyo= "El año es obligatorio";
            }else{
                $pattern="/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";
                if(!preg_match($pattern,$temp_anyo)){
                    $err_anyo= "El formato de fecha no es correcto";
                }else{
                    $anyo=$temp_anyo;
                }
            }
            //Si existe todo, imprime los datos.
            if (isset($nombre)&& isset($apellidos) 
            && isset($anyo) && isset($email) && isset($dni)){
            echo "<p>$nombre</p>";
            echo "<p>$apellidos</p>";
            echo "<p>$email</p>";
            echo "<p>$anyo</p>";
            echo "<p>$dni</p>";
            }
        }

        function depurar($dato){
            $dato=trim($dato);//elimina espacios en blanco.
            $dato=stripslashes($dato);//quita las barras de un string.
            $dato=htmlspecialchars($dato);
            return $dato;
        }
    ?><!--El php termina cuando empieza el formulario-->

    <form action="" method="POST">
        <p>Nombre:
            <input type="text" name="nombre" placeholder="Escriba aquí su nombre: ">
            <span class="error">
                *<?php if (isset($err_nombre)) echo $err_nombre?>
            </span>
        </p>

        <p>Apellidos:
            <input type="text" name="apellidos" placeholder="Escriba aquí su apellido: ">
            <span class="error">
                *<?php if (isset($err_apellidos)) echo $err_apellidos?>
            </span>
        </p>

        <p>DNI:
            <input type="text" name="dni" placeholder="Escriba aquí su dni:">
            <span class="error">
                *<?php if (isset($err_dni)) echo $err_dni?>
            </span>
        </p>

        <p>Email:
            <input type="text" name="email" placeholder="Escriba aquí su email: ">
            <span class="error">
                *<?php if (isset($err_email)) echo $err_email?>
            </span>
        </p>

        <p>Fecha de nacimiento</p>
        <input type="text" name="anyo" placeholder="Escriba aquí su fecha de nacimiento:">
        <span class="error">
            * <?php if (isset($err_anyo)) echo $err_anyo?>
        </span>

        <p>
            <input type="submit" value="Enviar el formulario">
        </p>
    </form>
</body>

</html>