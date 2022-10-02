<h1>Estructura If</h1>
<?php
    $fecha1= date("F j,Y,g:i a");
    echo $fecha1;
    echo "<br><br>";

    $fecha2 = date('\i\t \i\s \t\h\e jS \d\a\y.');
    echo $fecha2;

/* Escribir en español el dia de la semana con IF y la funcion Date */

$dia_semana=date("l");
echo "<br><br>";
echo($dia_semana);
echo "<br><br>";
if ($dia_semana == "Monday"){
    echo "Hoy es lunes";
}else if($dia_semana=="Tuesday"){
    echo "Hoy es martes";
}
echo "<br><br>";
$numero_aleatorio= rand(1,999);
echo $numero_aleatorio;
echo "<br><br>";

/*Generar dos numeros aleatorios y decir cual dls 2 es mayor o si son iguales */
$numero1= rand(1,10);
$numero2= rand(1,10);
if ($numero1 > $numero2){
    echo "$numero1 es mayor que $numero2";
}elseif($numero1 < $numero2){
    echo "$numero1 es menor que $numero2";
}elseif($numero1==$numero2){
    echo"$numero1 y $numero2 son iguales";
}
?>