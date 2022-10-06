<?php
//echo date("l j \of Y");
/*Usar la estructura switch para mostrar el dia
 * actual en español, "hoy es jueves"
 */

$dia_semana=date("l");
echo "<br><br>";
echo($dia_semana);
echo "<br><br>";
if ($dia_semana == "Monday"){
    echo "Hoy es lunes";
}else if($dia_semana=="Tuesday"){
    echo "Hoy es martes";
}else if($dia_semana=="Wednsday"){
    echo "Hoy es miercoles";
}else if($dia_semana=="Thursday"){
    echo "Hoy es jueves";
}else if($dia_semana=="Saturday"){
    echo "Hoy es sabado";
}else if($dia_semana=="Sunday"){
    echo "Hoy es domingo";
}
 
echo "<br><br>";

$fecha1= date("g:i a");
echo $fecha1;
echo "<br><br>";
$fecha2 = date('d/m/Y');
echo $fecha2;
/* Mostrar la fecha y hora en el mismo formato
que el reloj del ordenador.
10:38
06/10/2022
*/
?>