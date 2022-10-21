<?php
    $contrasena= "123galgñlahg4";
    echo "<p>$contrasena</p>";

    $hash_contrasena= password_hash($contrasena, PASSWORD_DEFAULT);
    echo "<p>$hash_contrasena</p>";
    /*Crear fichero signup.php con un formulario con los siguientes campos:
        -usuario y contraseña
        Insertar en la base de datos el usuario con el hash de su contraseña*/
?>