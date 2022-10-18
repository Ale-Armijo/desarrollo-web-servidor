<h1>Respuesta al formulario</h1>
<?php
    $frase=$_GET["frase"];
    $e=$_GET["encabezado"];

    echo "<h$e>$frase</h$e>";//es igual que la de abajo
    //echo "<h". $e . ">" . $frase . "</h" . $e . ">";
?>

<!-- Las variables se pueden meter dentro de etiquetas php-->