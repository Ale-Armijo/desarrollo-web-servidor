<h1>Respuesta al formulario</h1>
<?php
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    $resultado=1;

    for ($i=1; $i <=$exponente; $i++){
        $resultado=$resultado * $base;
    }
    echo "<p>$resultado</p>";
?>