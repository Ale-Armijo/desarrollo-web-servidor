<h1>Tabla de multiplicar</h1>
<?php
    $tabla= 7;
?>

<table>
    <tr>
        <th>Tabla del <?php echo $tabla?></th>
    </tr>

    <?php
        for ($i=1; $i<=10; $i++){
            echo "<tr>";
            echo "<td>$tabla x $i= ".$tabla * $i."<br>";
            echo "<tr>";
        }
?>
</table>