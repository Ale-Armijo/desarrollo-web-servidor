<H1>Ejemplo 2</H1>
<h2>Sanear y validar string</h2>
<form action="ejemplo_2.php" method="post">
    <label>String:</label>
    <input type="text" name= "string"><br><br>
    <input type="hidden" name="f" value="f_string">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER[REQUEST_METHOD] == "POST"){
    if ($_POST["f"]== "f_string"){
        $string= $_POST["string"];
        $string= filter_var($string,FILTER_SANITIZE_STRING)
    }
}

<h2>Sanear y validar INT</h2>
<form action="ejemplo_2.php" method="post">
    <label>Int:</label>
    <input type="text" name= "string"><br><br>
    <input type="hidden" name="f" value="f_int">
    <input type="submit" value="Enviar">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        if($_POST["f"]=="f_int"){
            $int =$_POST["int"];
            $int=filter_var($int,FILTER_SANITIZE_NUMBER_INT);
            $int= filter_var($int,FILTER_VALIDATE_INT);
            if($int){
                echo"<p>$int</p>;
            }else{
                echo "No es un int";
            }
        }
    }

?>