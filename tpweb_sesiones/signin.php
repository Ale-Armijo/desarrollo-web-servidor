<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero con un formulario con usuario y contraseña</title>
</head>

<body>
    <h1>Mostrar por pantalla el usuario introducido y el hash de la contraseña almacenada
        o si no hay ningun usuario con ese nombre, un mensaje indicandolo.
        </h2>
        <form action="" method="POST">
            Usuario: <input type="text" name="usuario">
            <br><br>
            Contraseña: <input type="password" name="contrasena">
            <br><br>
            <input type="submit" value="Logearse">
        </form>

        

        <?php
        require 'database.php';
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST["usuario"])&& isset($_POST["contrasena"]));
            $usuario= $_POST["usuario"];
            $contrasena = $_POST["contrasena"];
            $sql= "SELECT usuario, contrasena FROM usuarios 
            WHERE usuario = '$usuario'";
            $resultado = $conexion -> query($sql);
            if ($resultado -> num_rows > 0){
                while ($row = $resultado -> fetch_assoc()){
                    $hash_contrasena = $row ["contrasena"];
                    //echo "<p>Usuario:$usuario</p>";
                    //echo "<p>Hash contraseña: $hash_contrasena</p>";
                }
                $auth= password_verify($contrasena, $hash_contrasena);
                if ($auth == TRUE){
                    echo "<h3>Login correcto</h3>";
                }else{
                    echo "<h3>Contraseña erronea.</h3>";
                }
            }else{
                echo "<p>No hay ningun usuario</p>";
            }
        }
    ?>
</body>


</html>