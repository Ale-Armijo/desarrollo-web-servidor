<!DOCTYPE html>
<html lang="en">
<div>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla Multiplicar BIS</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <form action="#ej8" method="POST">
            <label>Numero</label><br>
            <input type="text" name="numero"><br><br>
            <input type="hidden" name="f" value="ej8">
            <input type="submit" value="enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if ($_POST["f"] == "ej8") {
                $numero=$_POST["numero"];
                echo "<table>";
                echo "<tr><th>Tabla del $numero</th></tr>";
                for($i=1; $i <=10; $i++){
                    echo "<tr>";
                    echo "<td>$numero x $i</td>";
                    echo "<td>" . $numero * $i ."</td>";
                    echo"</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</div>
</body>

</html>