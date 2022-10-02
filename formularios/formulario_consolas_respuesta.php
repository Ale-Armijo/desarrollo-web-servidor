<h1>Respuesta formulario consolas</h1>
<?php
    $consolas_precio=[
        "switch"=> 300,
        "ps4" => 250,
        "ps5" => 600
    ];
    $consola= $_POST["consola"];
    $precio=$consolas_precio[$consola];
    
    $precio =0;
    if ($consola == "switch"){
        $precio= $consolas_precio["switch"];
    }else if($consola == "ps4"){
        $precio= $consolas_precio["ps4"];
    }else if($consola == "ps5"){
        $precio=$consolas_precio["ps5"];
    }
    echo "<p>El precio de $consola es $precio</p>";
?>