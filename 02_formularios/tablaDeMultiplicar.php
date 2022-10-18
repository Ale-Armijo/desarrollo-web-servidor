<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Tabla de multiplicar</h1>

    <form action="tablaDeMultiplicar.php" method="post">
        <label>Elige una tabla:</label><br>
        <select name="tabla">
            <option value="1">Tabla del 1</option>
            <option value="2">Tabla del 2</option>
            <option value="3">Tabla del 3</option>
            <option value="4">Tabla del 4</option>
            <option value="5">Tabla del 5</option>
            <option value="6">Tabla del 6</option>
            <option value="7">Tabla del 7</option>
            <option value="8">Tabla del 8</option>
            <option value="9">Tabla del 9</option>
            <option value="10">Tabla del 10</option>
        </select>
        <input type="submit" value="Mostrar la tabla">
    </form>

    <!--<table id="my-table">
        <tr>
            <th>Tabla del <?php echo $tabla ?></th>
        </tr>
        <?php 
            /*for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$tabla x $i = " . $tabla * $i ."</td>";
                echo "</tr>";
            }*/
        ?>
    </table>-->

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $tabla = (int)$_POST["tabla"];

            echo "<table>";
            echo "<tr><th>Tabla del $tabla</th></tr>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$tabla x $i = " . $tabla * $i ."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>

<a href="index.php">Volver al inicio</a>
<!-- Comentario -->