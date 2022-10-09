<h1>Estructura Switch</h1>
<?php
    //rand (a, b) => numero aleatorio entre a y b
    $numero= rand (1,3);
    echo "<p>El numero aleatorio es $numero</p>";
    switch ($numero){
        case 1:
            echo "<p>$numero es igual a 1</p>";
            break;
        case 2:
            echo "<p>$numero es igual a 2.</p>";
            break;
        default:
            echo "<p>$numero es igual a 3.</p>";
            //break; se puede quitar xq despues de este echo no hay nada.
            
    }

    $nota= 6;
    $nombre=Alejandra;
    switch($nota){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<p>$nombre ha suspendido</p>";
        case 5:
        case 6:
            echo "<p>$nombre ha aprobado</p>";
            break;
        case 7:
        case 8:
            echo "<p>$nombre ha obtenido un notable.</p>";
        default:
            echo "<p>$nombre ha obtenido sobresaliente.</p>";
            break;
        }
?>