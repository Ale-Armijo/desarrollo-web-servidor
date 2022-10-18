<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <html>
    <h1>Ejercicio 2</h1>

    <p>Crear un formulario que reciba un numero.
        Habra que crear una lista dinamicamente con tantos elementos como
        se hay indicado:</p>

    <div>
        <form action="ejercicios/ejercicio2_respuesta.php" method="get">
            <label>Numero1</label><br><br>
            <input type="text" name="numero1" placeholder="Escriba un numero:"><br><br>
            <label>Numero2</label><br><br>
            <input type="text" name="numero2" placeholder="Escriba otro numero:"><br><br>
            <input type="submit" value="Enviar formulario">
            <br><br>
        </form>
        <?php
        require 'footer.php';
        ?>
    </div>
    
    <p><a href="../index.php">Volver al inicio</a></p>
</body>

</html>