<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>
        Crear un formulario que reciba el nombre y la edad de una persona y
        muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
        a su edad.
        Además:
        - Convertir la edad a un número entero.
        - Convertir el nombre introducido a minúsculas
        salvo la primera letra, que será mayúscula</h2>
    <div>
    <form action="ejercicios/ejercicio3_respuesta.php" method="get">
        <label>Nombre</label><br><br>
        <input type="text" name="nombre" placeholder="Escriba su nombre:"><br><br>
        <label>Edad</label><br><br>
        <input type="text" name="edad" placeholder="Escriba su edad:"><br><br>
        <input type="submit" value="Enviar formulario">
        <br><br>
    </form>
    <?php
    require 'footer.php';
?>
    </div>
</body>

</html>
<!-- Comentario -->
<a href="../index.php">Volver al inicio</a>