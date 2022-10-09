<h1>Respuesta al formulario</h1>
<?php
    $frase=$_GET["frase"];
    $e=$_GET["encabezado"];

    echo "<h$e>$frase</$e>";
    echo "<h". $e . ">" . $frase . "</h" . $e . ">";
?>