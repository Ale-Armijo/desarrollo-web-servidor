<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
        en un encabezado d.
        Si introducimos "5" y "Hola mundo" se mostrará un encabezado Hola mundo
    </h2>
    <div>
        <form action="ejercicios/ejercicio4_respuesta.php" method="GET">
            <label>Frase</label><br><br>
            <input type="text" name="frase" placeholder="Escriba una frase:"><br><br>
            <label>Encabezado</label><br><br>
            <input type="text" name="encabezado" placeholder="Escriba un encabezado:"><br><br>
            <input type="submit" value="Enviar">
            <br><br>
        </form>
        <?php
    require 'footer.php';
?>
    </div>
</body>

</html>
<a href="../index.php">Volver al inicio</a>
<!-- Comentario -->