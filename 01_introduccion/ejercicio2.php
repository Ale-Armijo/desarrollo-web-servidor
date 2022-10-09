<?php
/*EJERCICIO 2
    Imprimir los multiplos de 3 entre o y 50 en formato array.
    [3, 6, 9...30]
    */

    echo"[";//para dar formato array.
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
    echo"<br><br>";
    echo"[";
    $string= "";
    for ($i=3; $i<=30;$i+=3){
        $string = $string . $i;//concatena espacio con nº.
        echo "<p>$string</p>";
    }
    $string = substr($string, 0, strlen($string)-1);
    echo $string;
    echo"]";

    /* SUBSTR: Devuelve parte de una cadena.
    substr(string $string, int $start, int $length =?): string
    Devuelve una parte del string definida por los parametros start y length. */

    /** STRLEN: Devuelve la longitud de un string.
     * strlen (string $string): int
     */
?>

<?php
echo"<br><br>";
echo"[";
$string= "";
for($i=3; $i<=50; $i+=3){
    $string= $string. $i. ", ";
}
$string= substr($string, 0, strlen($string)-1);
echo"$string";
echo"]";
?>