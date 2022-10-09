<ul>
    <?php
    $n1 = $_GET["numero1"];
    for ($i= 1; $i<= $n1; $i++){//siempre que i sea menor que numero.
        echo "<li>$i</li>";//imprime los numeros en una lista
    }
    echo "<br><br>";
    $n2 = $_GET["numero2"];
    for($i=1; $i<= $n2; $i++){
        echo"<li>$i</li>";
    }
?>
</ul>