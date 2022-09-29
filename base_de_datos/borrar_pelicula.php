<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST" && 
        $_POST["formulario"]=="borrar"){
        $id= $_POST["id"];
        echo "Queremos borrar la pelicula con id= $id";
        $sql= "DELETE FROM peliculas WHERE id='$id'";

        if ($conexion-> query($sql)== TRUE){
            echo "Peleicula borrada";
        }else{
            echo "Error al borrar la pelicula";
        }
        }
?>