<!DOCTYPE html>
<html lang="en">

<head>
    <!--No olvidar cerrar los meta para que no de problemas en GIT-->
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>Ejercicio 7 Videojuegos desplegable</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <p>EJERCICIO 7:
        Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.
        Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
        40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirá mediante un campo
        select.
        Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un checkbox.</p>
    <div>
        <form action="ejercicio7_videojuegos.php" method="post">
            <label>Nombre del Videojuego</label><br><br>
            <input type="text" name="nombre" placeholder="Escriba el nombre del videojuego."><br><br>
            <label>Consola</label><br><br>
            <input type="text" name="consola" placeholder="Escriba el nombre de la consola">
            <select name="consola">
                <!--//desplegable-->
                <option value="ps4">PS4</option>
                <option value="ps5">PS5</option>
                <option value="switch">Switch</option>
            </select><br><br>
            <label>¿Edición especial?</label><br>
            <input type="checkbox" value="especial" value="si"><br><br>
            <input type="submit" value="Enviar formulario">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nombre=$_POST ["nombre"];
            $consola= $_POST["consola"];//Aquí llega el nombre desde el desplegable option value.
            $especial= "";
            if (isset ($_POST["especial"])){//ISSET= esa variable existe, si se ha definido.
                $especial=$_POST["especial"];//Si existe devuelve true.
            }
            echo "<p>$nombre</p>";
            echo "<p>$consola</p>";
            echo "<p>$especial</p>";
            $precio=0;

            //comprobamos la consola
            if($consola== "ps4"){
                $precio = 60;
            }else if($consola=="ps5"){
                $precio = 70;
            }else if($consola=="switch")
                $precio = 40;

            //Comprobamos si es edicion especial.
            if ($especial== "si"){
                $precio *= 1.25;
            }
            echo "<h3>El videojuego $nombre vale $precio</h3>";
        }
        ?>
    </div>

</body>

</html>