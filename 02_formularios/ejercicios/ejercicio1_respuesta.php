<h1>Respuesta al formulario</h1>
<?php
    $nombre=$_POST["nombre"];
    $nombre=ucwords(strtolower($nombre));
    $apellidos= $_POST["apellidos"];
    $apellidos=ucwords(strtolower($apellidos));
    $edad= $_POST["edad"];
    $direccion= $_POST["direccion"];
    
    echo "<p>Su nombre es $nombre</p>";
    echo "<p>El apellido de $nombre es $apellidos</p>";
    echo "<p>La edad de $nombre es $edad</p>";
    echo "<p>La direccion de $nombre es $direccion</p>";
?>