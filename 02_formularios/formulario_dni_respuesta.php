<h1>Respuesta formulario</h1>

<?php
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];

    function dniValido (string $dni) {
        if (strlen($dni) == 9) {
            return true;
        } else {
            return false;
        }
    }

    if (dniValido($dni) == true) {
        echo "<h3>El DNI de $nombre es válido</h3>";
    } else {
        echo "<h3>El DNI de $nombre no es válido</h3>";
    }
    echo "<h4>DNI: $dni</h4>";
    echo "<h4>Nombre: $nombre</h4>";
?>