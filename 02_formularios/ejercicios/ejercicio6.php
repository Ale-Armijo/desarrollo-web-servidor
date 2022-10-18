<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>Ejercicio6</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejercicio 6
        <p>Formulario que reciba un número y devuelva su factorial.
            Factorial de 3: 1*2*3 = 6
            Factorial de 5: 1*2*3*4*5 = 120</p>
    </h1>
    <form action="ejercicios/ejercicio6_respuesta.php" method="post">
        <p>Número:</p>
        <input type="text" name="numero" placeholder="Escriba un numero:"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    require 'footer.php';
?>
</body>

</html>
<a href="../index.php">Volver al inicio</a>
<!-- Comentario -->