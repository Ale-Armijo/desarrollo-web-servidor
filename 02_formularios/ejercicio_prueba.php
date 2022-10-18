<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>Ejercicio prueba con respuesta incluida</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body><!--EL VALOR f ("name") DEBE SER COMUN A TODOS LOS FORMULARIOS-->
     <!--la etiqueta "value" DEBE SER DISTINTA PARA IDENTIFICAR CADA FORMULARIO-->
    <form action="ejercicio_prueba.php" method="POST"><!--Formulario A-->
        <label>Numero</label>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="f_numero"><!--Etiqueta oculta-->
        <input type="submit" value="Enviar"><br><br>
    </form>

    <form action="ejercicio_prueba.php" method="POST"><!--Formulario B-->
        <label>Nombre</label>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="f_nombre">
        <input type="submit" value="Enviar"><br><br>
    </form>

    <?php /*Aqui se haria la respuesta, en el mismo fichero. Se comprueba 
    si se ha ejecutado un metodo GET o POST desde el servidor.*/
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
             if($_POST["f"]=="f_numero"){
                echo "<p>Estoy en f_numero</p>";
            }else if($_POST["f"]== "f_nombre"){
                echo "<p>Estoy en f_nombre</p>";
            }
        }
        
        ?>
</body>

</html>
<a href="index.php">Volver al inicio</a>
<!-- Comentar -->