<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <p>
Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
en un encabezado d.
Si introducimos "5" y "Hola mundo" se mostrará un encabezado <h5>Hola mundo</h5>
</p>
    </h1>
<form action="ejercicio4_respuesta.php" method="GET">
    <label>Frase</label><br><br>
    <input type="text" name="frase"><br><br>
    <label>Encabezado</label><br><br>
    <input type="text" name="encabezado"><br><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>