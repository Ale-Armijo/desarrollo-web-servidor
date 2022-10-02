<?php
    require 'database.php';
    if ($_SERVER ["REQUEST_METHOD"]== "POST"
            && $_POST["formulario"]== "actualizar"){   
        $id = $_POST["id"];
        $titulo= $_POST["titulo"];
        $duracion=$_POST["duracion"];
        $fecha_estreno= $_POST["fecha_estreno"];

        $sql = "UPDATE peliculas 
            SET titulo= '$titulo',
                fecha_estreno='$fecha_estreno',
                duracion='$duracion'
            WHERE id='$id'";

        if($conexion -> query($sql)== TRUE){
            ECHO "<p>Pelicula modificada</p>";
        }else{
            ECHO "<p>Error al modificar</p>";
        }
        }
    if ($_SERVER["REQUEST_METHOD"] == "POST"
            && $_POST["formulario"] == "modificar") {

        $id = $_POST["id"];

        $sql = "SELECT * FROM peliculas WHERE id = '$id'";

        $resultado = $conexion -> query($sql);

        if ($resultado -> num_rows > 0) {
            while ($row = $resultado -> fetch_assoc()) {
                $titulo = $row["titulo"];
                $duracion = $row["duracion"];
                $fecha_estreno = $row["fecha_estreno"];
            }
        }
    }

?>

<h2>Modificar película <?php if (isset($id)) echo $id; ?></h2>

<form action="" method="post">
    Título: <input type="text" name="titulo" value="<?php echo $titulo ?>">
    <br><br>
    Duración: <input type="text" name="duracion" value="<?php echo $duracion ?>">
    <br><br>
    Fecha de estreno:<br>
    <input type="date" name="fecha_estreno" value="<?php echo $fecha_estreno ?>">
    <br><br>
    <input type= "hidden" name="id" value="<?php echo $id?>">
    <input type= "hidden" name="formulario" value="actualizar">
    <input type= "submit" value="Modificar">
</form>
<br><br>
<a href= "index.php">Volver al inicio</a>