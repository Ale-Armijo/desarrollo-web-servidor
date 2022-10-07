<h1>Respuesta al formulario</h1>
<?php
    $nombre=$_POST["nombre"];
    $apellidos= $_POST["apellidos"];
    $edad= $_POST["edad"];
    $direccion= $_POST["direccion"];
    
    echo "<p>$nombre</p>";
    echo "<p>$apellidos</p>";
    echo "<p>$edad</p>";
    echo "<p>$direccion</p>";
?>