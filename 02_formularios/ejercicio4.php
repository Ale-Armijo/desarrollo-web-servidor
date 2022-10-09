<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
        en un encabezado d.
        Si introducimos "5" y "Hola mundo" se mostrará un encabezado Hola mundo
    </h2>
    <form action="ejercicio4_respuesta.php" method="GET">
        <label>Frase</label><br><br>
        <input type="text" name="frase"><br><br>
        <label>Encabezado</label><br><br>
        <input type="text" name="encabezado"><br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>
</body>

</html>
<a href="index.php">Volver al inicio</a>