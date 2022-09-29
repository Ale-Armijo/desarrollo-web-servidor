<!DOCTYPE htlm>
<html>
    <head>
        <title>Ejemplo Mysqli</title>
        <?php
            require 'database.php';
        ?>
    </head>
    <body>
        <h1>Listado de peliculas</h1>
        <?php
            $sql= "SELECT * FROM peliculas";
            $resultado = $conexion -> query($sql);
            
            if($resultado-> num_rows >0){
                while($row = $resultado -> fetch_assoc()){
                    echo "Id: " . $row["id"] . "<br>";//imprime los id
                    echo "Titulo de la pelicula: " . $row ["titulo"] . "<br>";
                    echo "Duracion: " . $row["duracion"] . "<br>";
                    echo "Fecha de estreno: " . $row["fecha_estreno"]. "<br><br>";
                }
            }else{
                echo "No se han encontrado peliculas";
            }
        ?>
    </body>
</html>