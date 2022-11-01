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
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $temp_dni= depurar($_POST["dni"]); //¿No se depura?
            $temp_nombre= depurar($_POST["nombre"]);
            $temp_apellido1= depurar($_POST["apellido1"]);
            $temp_apellido2= depurar($_POST["apellido2"]);
            $temp_edad= depurar($_POST["edad"]);
            $temp_email= depurar($_POST["email"]);
            

            //Validacion del DNI:
            if (empty($temp_dni)){
                $err_dni="El DNI es obligatorio.";
            }else{
                $pattern="/^ [0-9\.]{8} [a-zA-Z]$/";
                if (!preg_match($pattern,$temp_dni)){
                    $err_dni="El DNI debe tener 8 digitos y una letra.";
                }else{
                    $dni=$temp_dni;//FALTA COMPROBAR QUE LA LETRA ES CORRECTA.
                }
                $dni=$temp_dni;
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
                            echo "DNI no válido, la letra no es correcta.";
                        }   
                    }
                    }else {
                    echo "DNI no valido";
                }
            }


    
        
            /*Validacion de nombre:El nombre y los apellidos no deberán contener caracteres
            especiales y habrá que mostrarlos con la primera letra en mayúscula y las demás 
            en minúscula, aunque se hayan introducido en mayúsculas o minúsculas.*/
            
            //VALIDACION DEL NOMBRE
            if (empty($temp_nombre)){
                $err_nombre="El nombre es obligatorio.";
            }else{
                $pattern= "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
                //https://www.w3schools.com/php/func_regex_preg_match.asp
                if (!preg_match($pattern,$temp_nombre)){//si la variable nombre sigue el patron de la variable pattern
                    $err_nombre= "El nombre solo puede contener letras.";
                }else{
                    //Exito
                    
                }$nombre= $temp_nombre;
            }

            //VALIDACION DEL APELLIDO1:
            if (empty($temp_apellido1)){
                $err_apellido1="El primer apellido es obligatorio.";
            }else{
                $pattern= "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
                if (!preg_match($pattern,$temp_apellido1)){//si la variable nombre sigue el patron de la variable pattern
                    $err_apellido1= "El apellido solo puede contener letras.";
                }else{
                    if(strlen($temp_apellido1)>30){
                        $err_apellido1="El apellido no puede tener mas de 30 caracteres.";
                    }else{
                        //Entra por aquí cuando todo correcto.
                    }
                } $apellido1= $temp_apellido1;
            }

            //VALIDACION DEL APELLIDO2:
            if (empty($temp_apellido2)){
                $err_apellido2="El primer apellido es obligatorio.";
            }else{
                $pattern= "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
                if (!preg_match($pattern,$temp_apellido2)){//si la variable nombre sigue el patron de la variable pattern
                    $err_apellido2= "El apellido solo puede contener letras.";
                }else{
                    if(strlen($temp_apellido2)>30){
                        $err_apellido2="El apellido no puede tener mas de 30 caracteres.";
                    }else{
                        //Entra por aquí cuando todo es correcto. 
                    }
                } $apellido2= $temp_apellido2;
            }



            /* VALIDACION DE LA EDAD: Si se es menor de 18 años se deberá mostrar 
            un aviso de que se es menor de edad. Además, la edad deberá ser siempre 
            un número, y nunca inferior a 0 o superior a 120 */
            if(empty($_POST["edad"])){
                $err_edad= "La edad es obligatoria";
            }else{
                $pattern="/^[0-9]{1,}$/";
                if(!preg_match($pattern,$temp_edad)){
                    $err_edad= "Por favor, escriba la edad en números.";
                }else{
                    if ($temp_edad <0 || $temp_edad >120){
                        $err_edad="<p>La edad no es correcta.</p>";
                    }else if ($temp_edad <120 && $temp_edad >0){
                        echo "<p>La edad es correcta.</p>";
                    }
                }
                $edad=$temp_edad;
            }
             /*VALIDACION DEL EMAIL. El correo electrónico deberá estar en formato correcto.
              No se permitirán además correos electrónicos que contengan palabras malsonantes
               (basta con que vetéis 3 palabras malsonantes). Utilizar la función str_contains.*/

             if(empty($temp_email)){
                $err_email= "Lo sentimos, el email es obligatorio";
            }else{//FILTER devuelve false cuando no sigue el filtro que hemos pasado.
                //Devuelve el propio valor si cumple con el filtro.
                $temp_email= filter_var($temp_email, FILTER_VALIDATE_EMAIL);
                if(!$temp_email){//Aquí no pasa el filtro.
                    $err_email= "El email no es válido.";
                }else {//Aquí sí pasa el filtro.
                }
            }$email= $temp_email;
            
            //Si existe todo, imprime los datos.
            if (isset($dni) && isset($nombre) && isset($apellido1) 
            && isset($apellido2) && isset($edad) && isset($email)){
            echo "<p>El DNI de $nombre es: $dni</p>";
            echo "<p>Su nombre es: $nombre</p>";
            echo "<p>Su primer apellido es: $apellido1</p>";
            echo "<p>Su segundo apellido es: $apellido2</p>";
            echo "<p>$nombre tiene $edad años.</p>";
            echo "<p>Su email es: $email</p>";
            }    
        }//Cierre del IF primero.

    

        /*Validar email El correo electrónico deberá estar en formato correcto.
         No se permitirán además correos electrónicos que contengan palabras 
         malsonantes (basta con que vetéis 3 palabras malsonantes). 
         Utilizar la función str_contains. */

        
    
        function depurar($dato){
            $dato=trim($dato);//elimina espacios en blanco.
            $dato=stripslashes($dato);//quita las barras de un string.
            $dato=htmlspecialchars($dato);
            return $dato;
        }
    ?>
    <!--El php termina cuando empieza el formulario-->

    <form action="" method="POST">
        <p>DNI:
            <input type="text" name="dni" placeholder="Escriba aquí su DNI:">
            <span class="error">
            </span>
        </p>

        <p>Nombre:
            <input type="text" name="nombre" placeholder="Escriba aquí su nombre:">
            <span class="error">
                *<?php if (isset($err_nombre)) echo $err_nombre?>
            </span>
        </p>
        <p>Apellido1:
            <input type="text" name="apellido1" placeholder="Escriba aquí su primer apellido:">
            <span class="error">
                *<?php if (isset($err_apellido1)) echo $err_apellido1 ?>
            </span>
        </p>
        <p>Apellido2:
            <input type="text" name="apellido2" placeholder="Escriba aquí su segundo apellido:">
            <span class="error">
                *<?php if (isset($err_apellido2)) echo $err_apellido2?>
            </span>
        </p>
        <p>Edad:
            <input type="text " name="edad" placeholder="Escriba aquí su edad:">
            <span class="error">
                *<?php if (isset ($err_edad)) echo $err_edad ?>
            </span>
        </p>
        <p>Email:
            <input type="text" name="email" placeholder="Escriba aquí su email:">
            <span class="error">
                *<?php if (isset ($err_email)) echo $err_email?>
            </span>
        </p>

        <p>
            <input type="submit" name="Enviar">
        </p>
    </form>
</body>

</html>