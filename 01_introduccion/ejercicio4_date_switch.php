<h1>Ejercicio 4</h1>
<?php
$d=date("l");
switch($d){
    case "Monday":
        $dia="Lunes";
        break;
    case "Tuesday":
        $dia= "Martes";
        break;
    case "Wednsday":
        $dia= "Miercoles";
        break;
    case "Thursday":
        $dia="Jueves";
        break;
    case "Friday":
        $dia="Viernes";
        break;
    case "Saturday":
        $dia="Sabado";
        break;
    case "Sunday":
        $dia="Domingo";
        break;
}
$m= date("F");
switch ($m){
    case "January":
        $mes="Enero";
        break;
    case "February":
        $mes= "Febrero";
        break;
}
$anho =date("Y");
$ndia=date("j");
$mes= date("m");

echo "Hoy es $dia $ndia de $mes de $anho";
?>

<?php
    /*
        Usar la estructura switch para mostrar la 
        fecha actual en español. Por ejemplo: 

        "Hoy es jueves 6 de octubre de 2022"
    */

    $d = date("l");

    switch($d) {
        case "Monday": 
            $dia = "Lunes";
            break;
        case "Tuesday": 
            $dia = "Martes";
            break;
        case "Thursday":
            $dia = "Jueves";
            break;
    }

    $ndia = date("j");

    $m = date("F");

    switch($m) {
        case "January":
            $mes = "Enero";
            break;
        case "February":
            $mes = "Febrero";
            break;
        case "October":
            $mes = "Octubre";
            break;
    }

    $anho = date("Y");

    echo "Hoy es $dia $ndia de $mes de $anho";
    
?>
-----------------------------------------------------------------------------------
