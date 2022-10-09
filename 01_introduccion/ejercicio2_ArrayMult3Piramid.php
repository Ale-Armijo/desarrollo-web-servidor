<?php
echo"[";
for($i=3; $i<=30; $i +=3){
    if( $i<30){
        echo "$i, ";//en estas iteraciones va poniendo comas xq es <30
    }else{
        echo "$i";//en la ultima iteracion no la pone xq es = 30
    }
}
echo"]";
?>

<?php
echo "[";  //Hace una piramide sumando de 3 en 3.
$string="*";  //1º pone el asterisco
for ($i=3; $i<=30; $i +=3){//va concatenando nºs
    $string= $string . $i . ", ";
    echo "<p>$string</p>";

}
$string = substr($string, 0, strlen($string)-1);
echo "<p>$string</p>";
echo "]";
?>