<h1>Respuesta al formulario</h1>
<?php
    $base=$_GET["base"];
    $exponente=$_GET["exponente"];
    $resultado=1;

    for ($i=1; $i <=$exponente; $i++){//Se comienza por uno.
        
        if($exponente<0){
            echo "El exponente debe ser positivo.";
        }else if ($exponente == 0){
            echo ("<p>$resultado</p>");
        }else{
            for ($i=1; $i <= $exponente; $i++){
                $resultado=$resultado * $base;
            }
        } echo "<p>$resultado</p>";
    }
?>