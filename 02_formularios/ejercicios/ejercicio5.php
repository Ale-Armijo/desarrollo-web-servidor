<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>
        <p>Formulario que reciba dos números.
            Devolver el resultado de elevar el primero al segundo.
            Para el martes: Asegurarse de que funciona con cualquier valor válido.
            No se admiten exponentes negativos. Con mensaje no valido.
        </p>
    </h2>
    <div>
        <form action="ejercicios/ejercicio5_respuesta.php" method="get">
            <label>Base</label><br><br>
            <input type="text" name="base" placeholder="Escriba la base:"><br><br>
            <label>Exponente</label><br><br>
            <input type="text" name="exponente" placeholder="Escriba el exponente:"><br><br>
            <input type="submit" value="Enviar formulario">
        </form>
        <?php
    require 'footer.php';
?>
    </div>
    <br><br>
</body>

</html>

<a href="../index.php">Volver al inicio</a>
<!-- Comentario -->