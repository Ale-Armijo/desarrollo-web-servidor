<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejercicio 8
        <p>Crear un formulario que reciba un número. Mostrar la tabla de multiplicar de ese número.
            Hacerlo mediante una tabla HTML.</p>
    </h1>
    <form action="ejercicio8.php" method="post">
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

</html>
<a href="index.php">Volver al inicio.</a>