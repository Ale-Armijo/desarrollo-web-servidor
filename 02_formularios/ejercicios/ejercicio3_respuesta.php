<h1>Respuesta al formulario</h1>
<?php
    $nombre=$_GET["nombre"];
    $nombre= ucwords(strtolower($nombre));
    $edad=(int)$_GET["edad"];
    
    if($edad<=1 && $edad >=0){
        echo"$nombre es un bebé.";
    }else if ($edad<18 && $edad >= 0){
        echo "<p>$nombre es menor de edad.</p>";
    }else if($edad>= 18 && $edad <=65){
        echo "<p>$nombre es adulto.</p>";
    }else if($edad>65 && $edad <130){
        echo "<p>$nombre es jubilado</p>";
    }else{
        echo "<p>La edad no es valida</p>";
    }
?>

<!-- Comentario -->