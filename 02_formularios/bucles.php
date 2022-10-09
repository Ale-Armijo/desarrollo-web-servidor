<h1>Bucles</h1>

<h2>Bucle while</h2>

<h3>Números del 1 al 10</h3>

<?php
    $i = 1;
    echo "<ul>";
    while ($i <= 10) {
        echo "<li>$i</li>";
        $i++;
    }
    echo "</ul>";
?>

<h3>Números del 10 al 1</h3>

<?php
    $i = 10;
    echo "<ul>";
    while ($i >= 1) {
        echo "<li>$i</li>";
        $i--;
    }
    echo "</ul>";
?>

<h3>Múltiplos de 3 entre 1 y 10</h3>

<?php
    $i = 1;
    echo "<ul>";
    while ($i <= 10) {
        if ($i % 3 == 0) {
            echo "<li>$i</li>";
        }
        $i++;
    }
    echo "</ul>";
?>

<h2>Do While</h2>

<h3>Números del 1 al 10</h3>

<?php
    $i = 1;
    echo "<ul>";
    do {
        echo "<li>$i</li>";
        $i++;
    } while ($i <= 10);
    echo "</ul>";
?>

<h3>Números pares del 1 al 10</h3>

<?php
    $i = 1;
    echo "<ul>";
    do {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
        $i++;
    } while ($i <= 10);
    echo "</ul>";
?>

<h2>Bucle For</h2>

<h3>Múltiplos de 3</h3>

<?php
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 3 == 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";
?>