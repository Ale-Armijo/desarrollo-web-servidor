<h1>Ejemplo 1</h1>
<form action= "ejemplo_1.php">
    <label>Texto para escribir:</label>
    <input type="text" name="texto"><br><br>
    <label>Escriba su mail:</label>
    <input type="text" name= "email"><br><br>
    <input type="submit" value= "Enviar">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $texto= $_POST["texto"];
        $texto= filter_var($texto,FILTER_SANITIZE_STRING);
        echo "<p>$texto</p>";
        $email=$_POST["email"];
        $email= filter_var($email,FILTER_SANITIZE_EMAIL);
        $email= filter_var($email,FILTER_VALIDATE_EMAIL);

        if ($email){
            echo "<p>$email</p>";
        }else {
            echo "<p>El email es incorrecto</p>";
        }
    }
    ?>
