<ul>
<?php
    $n = $_GET["numero"];
    for ($i= 1; $i<= $n; $i++){//siempre que i sea menor que numero.
        echo "<li>$i</li>";//imprime los numeros en una lista
    }
?>
</ul>