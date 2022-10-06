<?php
/*EJERCICIO 2
    Imprimir los multiplos de 3 entre o y 50 en formato array.
    [3, 6, 9...30]
    */

    echo"[";
    for ($i=3; $i<= 30; $i+=3){
        if($i<30){
            echo "$i,";
        }else{
            echo "$i";
        }
    }
    echo "]";
?>

<?php
    echo"[";
    $string= "";
    for ($i=3; $i<=30;$i+=3){
        $string = $string . $i;
        echo "<p>$string</p>";
    }
    $string = substr($string, 0, strlen($string)-1);
    echo $string;
    echo"]";

?>