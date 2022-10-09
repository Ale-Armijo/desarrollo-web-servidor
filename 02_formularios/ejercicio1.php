<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href= "styles.css">
</head>

<body>
    <p>Ejercicio de hacer un formulario con las etiquetas Nombre y Edad y el boton de enviar.</p>
    <form action="ejercicio1_respuesta.php" method="POST">
        <label>Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Apellidos</label><br><br>
        <input type="text" name="apellidos"><br><br>
        <label>Edad</label><br>
        <input type="text" name="edad"><br><br>
        <label>Direccion</label><br><br>
        <input type="text" name="direccion"><br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>
</body>

</html>
<a href="index.php">Volver al inicio</a>