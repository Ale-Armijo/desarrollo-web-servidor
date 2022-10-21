<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario insertar signup</title>
</head>

<body>
    <form action="" method="POST">
        Usuario: <input type="text" name="usuario">
        <br><br>
        Contraseña: <input type="password" name="contraseña">
        <br><br>
        <input type="submit" value="Registrarse">
    </form>

    <?php
    require 'database.php';
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST["usuario"])&& isset($_POST["contraseña"])){
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contraseña"];
            
            $hash_contrasena= password_hash($contrasena, PASSWORD_DEFAULT);
            $sql= "INSERT INTO usuarios (usuario, contrasena)
                VALUES ('$usuario','$hash_contrasena')";
            if ($conexion -> query ($sql)== TRUE){
                echo "Registrado";
            }else{
                echo "Error en el registro.";
            }
            
        }
    }
    ?>
</body>

</html>