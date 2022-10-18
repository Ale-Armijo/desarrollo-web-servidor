<h1>Formularios</h1>

<?php

    function depurar($dato) {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

?>

<h2>Ejercicio 1</h2>

<form action="formularios.php" method="post">
    <p>Nombre:</p>
    <input type="text" name="nombre"><br><br>
    <p>Edad:</p>
    <input type="text" name="edad"><br><br>
    <input type="hidden" name="formulario" value="ej1">
    <input type="submit" value="Enviar">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["formulario"] == "ej1") {
            $nombre = depurar($_POST["nombre"]);
            $edad = (int)(depurar($_POST["edad"]));
            echo "<p>$nombre</p>";
            echo "<p>$edad</p>";
            var_dump($nombre);
        }
    }
?>

<h2>Ejercicio 2</h2>
<p>Crear un formulario que reciba un número por 
   por pantalla y muestre una lista con los 
   números de 1 hasta dicho número.
</p>

<form action="formularios.php" method="post">
    <p>Número:</p>
    <input type="text" name="numero"><br><br>
    <input type="hidden" name="formulario" value="ej2">
    <input type="submit" value="Enviar">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["formulario"] == "ej2") {
            $n = (int)$_POST["numero"];
            echo "<ul>";
            for ($i = 1; $i <= $n; $i++) {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        }
    }
?>

<h2>Ejercicio 3</h2>
<p>Crear un formulario que reciba un número
   y calcule su factorial. El factorial de 3
   sería 3*2*1. El de 5 sería 5*4*3*2*1
</p>

<form action="ejercicio_3.php" method="post">
    <p>Número:</p>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar">
</form>

<h3>Ejercicio 4</h3>
<p>Crear un formulario que reciba dos números
   y devuelva el resultado de elevar el primero
   al segundo. Hacerlo mediante un bucle. 
</p>

<form action="ejercicio_4.php" method="post">
    <p>Base:</p>
    <input type="text" name="base"><br><br>
    <p>Exponente:</p>
    <input type="text" name="exponente"><br><br>
    <input type="submit" value="Enviar">
</form>

<h3>Ejercicio 5</h3>
<p>
   Crear un formulario que reciba un número y muestre
   una lista con sus divisores
</p>

<form action="ejercicio_5.php" method="post">
    <p>Número:</p>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar">
</form>

<h3>Ejercicio 6</h3>
<p>
   Crear un formulario que reciba un número y 
   compruebe si es primo

   Un número es primo cuando sus únicos divisores
   son 1 y sí mismo
</p>

<form action="ejercicio_6.php" method="post">
    <p>Número:</p>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar">
</form>