<h1>Formulario consolas</h1>
<form action="Formulario_consolas_respuestas.php" method="post">
    <label>Consola que es un label</label>
    <br>
    <select name="consola">
        <option disable selected value>-Selecciona una consola</option>
        <option value="switch">Nintendo Switch</option>
        <option value="ps4">Playstation 4</option>
        <option value="ps5">Playstation 5</option>
    </select>
    <br><br>
    <input type="submit" value="Ver precio">
</form>


<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $consolas_precio=[
            "switch"=> 300,
            "ps4" => 250,
            "ps5" => 600
        ];
        $consola= $_POST["consola"];
        $precio=$consolas_precio[$consola];
        echo "<p>El precio de $consola es $precio</p>";
    }
?>