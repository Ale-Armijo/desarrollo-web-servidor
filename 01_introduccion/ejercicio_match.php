<?php
    $d= date("l");//dia=

    $dia= match($d){
        "Monday"=> "Lunes",
        "Tuesday" => "Martes",
        "Wednsday" => "Miercoles",
        "Thursday" => "Jueves",
    };
    echo "$dia";
?>