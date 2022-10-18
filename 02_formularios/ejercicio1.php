<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <p>Ejercicio de hacer un formulario con las etiquetas Nombre y Edad y el boton de enviar.</p>
    <div>
        <form action="ejercicio1_respuesta.php" method="POST">
            <label>Nombre</label><br>
            <input type="text" name="nombre" placeholder= "Escriba su nombre:"><br><br>
            <label>Apellidos</label><br><br>
            <input type="text" name="apellidos" placeholder= "Escriba su apellido:"><br><br>
            <label>Edad</label><br>
            <input type="text" name="edad" placeholder ="Escriba su edad:"><br><br>
            <label>Direccion</label><br><br>
            <input type="text" name="direccion" placeholder= "Escriba su direccion:"><br><br>
            <input type="submit" value="Enviar">
            <br><br>
        </form>
    </div>
</body>

</html>
<a href="index.php">Volver al inicio</a>
<!-- Comentario -->