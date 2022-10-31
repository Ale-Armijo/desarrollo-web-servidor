<!DOCTYPE html>
<html lang="en">
<!--Para el martes:
AÑADIR AL FORMULARIO DE VIDEOJUEGOS:
- Consola (select con al menos 4 opciones) (PS4, PS5, SWITCH...)
El select de consolas tendrá una opción por defecto vacía
- Descripción (area de texto con 255 caracteres máximo)
Añadir mensajes de error
-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Videojuegos</title>
</head>

<body>
    <h2>Nuevo Videojuego</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            $temp_titulo= depurar($_POST["titulo"]);//Titulo es el array key.
            $temp_precio= depurar($_POST["precio"]);
            if (isset($_POST["consola"])){//Si el campo consola se rellena existe la variable temp_consola.
                $temp_consola= depurar($_POST["consola"]);
            }else{
                $temp_consola= "";//No se selecciona ningula consola.
            }
            $temp_descripcion= $_POST["descripcion"];

            $file_name = $_FILES["imagen"]["name"];/*Es un array doble.Name coge del archivo
            con nombre imagen el nombre de ese archivo.
            Name es la propiedad a la que queremos acceder.
            Imagen es el nombre del input type="file" name="imagen" q está + abajo.
            El array global $_FILES contendrá toda la información de los los ficheros subidos.*/

            $file_temp_name=$_FILES["imagen"]["tmp_name"];
            /*$_FILES['fichero_usuario']['tmp_name']
            Devuelve el nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.
            */
            $file_size= $_FILES["imagen"]["size"];
            /*$_FILES['fichero_usuario']['size']
            Devuelve el tamaño, en bytes, del fichero subido.*/

            $file_type=$_FILES["imagen"]["type"];

            echo "<p>El nombre de la imagen descargada es: $file_name</p>"; //Imprime el nombre de la imagen videojuego_.jpg
            echo "<p>La ruta temporal donde se ha descargado esta imagen es: $file_temp_name</p>";//Imprime la ruta donde se ha descargado temporalmente.
            echo "<p>El peso de este fichero es: $file_size</p>"; //Imprime el tamaño, el peso.
            echo "<p>El tipo de este fichero es: $file_type</p>"; //Imprime el tipo de archivo que es image/jpeg. 

            /* Validar el fichero introducido, es obligatorio introducir un fichero, 
            tiene que ser una imagen de extension jpg, jpeg, png, la imagen no 
            puede tener mas de 1 mg. 

            echo "<p>La extension es $extension</p>";
            

           // $new_file_name= "videojuego_" . $temp_titulo . "." . $extension;
           // $path = "./images/".$new_file_name; aqui es donde vamos a guardar la imagen, dentro de la carpeta images q hemos creado.
          

            En MOVE_UPLOADED_FILE movemos el archivo subido.
            if (move_uploaded_file($file_temp_name, $path)){
                //queremos mover el archivo desde $file_temp_name a $path
                echo "<p>Fichero movido con exito.</p>";
            }else{
                echo "<p>No se ha podido mover el fichero.</p>";
            }*/

            //Validacion del fichero:
            if(empty($file_name)){
                $err_imagen= "La imagen es obligatoria.";
            }else{
                $file_size= $_FILES["imagen"]["size"];
                if ($file_size > 1000000){
                    $err_imagen="La imagen no puede pesar mas de 1MG";
                }else{//PATHINFO devuelve info a cerca de la ruta del archivo.
                    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
                    // en $extension se va a guardar la extension jpg, etc
                    $extension_valida= match($extension){
                        "jpg"=>true,
                        "jpeg"=>true,
                        "png"=>true,
                        default=> false
                    };
                    if(!$extension_valida){
                        $err_imagen= "La imagen tiene que ser jpg, jpeg o png";
                    }else{//Aqui la imagen ya es valida y se agrega.
                        $new_file_name= "videojuego_" . $temp_titulo . "." . $extension;
                        //$new_file_name le da un nuevo nombre al fichero.
                        $path = "./images/" . $new_file_name;
                        $file_temp_name = $_FILES["imagen"]["tmp_name"];
                        if(move_uploaded_file($file_temp_name, $path)){
                            //el $file_temp_name lo movemos a $path.
                            echo "<p>Fichero movido con exito</p>";
                        }else{
                            echo "<p>Fracaso</p>";
                        }
                    }
                }
            }

            //VALIDACION DE LA DESCRIPCION:
            if (empty($temp_descripcion)){
                $err_descripcion="La descripcion es obligatoria.";
            }else{
                if (strlen($temp_descripcion)>255){
                    $err_descripcion = "La descripcion no puede tener mas de 255 caracteres";
                }else{
                    $descripcion= $temp_descripcion;
                }
            }
            if (empty($temp_consola)){//Si la variable temporal está vacia, salta error.
                $err_consola="La consola es obligatorio";
            }else{
                $consola=$temp_consola;
            }

            if (empty($temp_titulo)){
                $err_titulo="El titulo es obligatorio";
                //Validar que como mucho tenga 40 caracteres.
            } else{
                if (strlen($temp_titulo)>40){//maximo 40 caracteres.
                    $err_titulo="El titulo no puede tener mas de 40 caracteres.";
                }else{
                    //exito!
                    $titulo=$temp_titulo;//Entra aquí cdo cumple todos los requisitos.
                }
            }


            if (empty ($temp_precio)){
                $err_precio="El precio es obligatorio.";
            }else{//El filtro Float comprueba que lo introducido es un Float.
                //Si es Float devuelve el valor y si no lo es devuelve FALSE.
                $temp_precio=filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
                
                if (!$temp_precio){
                    $err_precio="El precio debe ser un numero.";
                }else{
                    $temp_precio=round($temp_precio,2);// Se redondea a dos decimales.
                    if ($temp_precio<0){
                    $err_precio ="El precio no puede ser negativo.";
                    }else if($temp_precio>=10000){
                    $err_precio="El precio no puede ser superior a 1000.";
                    }else{
                    echo "<h3>Exito!</h3>";
                    echo "<h3>$temp_precio</h3>";
                    }
                }
            }

            if (isset($titulo)&& isset ($precio) && isset($consola) && isset($descripcion)){//Solamt entra aquí cuando todas las variables cumplen requisitos.
                echo "<p>$titulo</p>";
                echo "<p>$precio</p>";
                echo "<p>$consola</p>";
                echo "<p>$descripcion</p>";
            }
            /*echo depurar ($_POST["titulo"]);
            echo "<br>";
            echo depurar ($_POST["precio"]);
            echo $_POST["titulo"];
            echo "<br>";
            echo $_POST[precio"];
            var_dump (trim($_POST["titulo"]));
            var_dump (stripslashes($_POST["titulo"]));//elimina barras especiales.
        */
        }
        function depurar($dato){
            $dato= trim($dato);//quita los espacios en blanco de alante y atrás.
            $dato= stripslashes($dato);//quita las barras \
            $dato = htmlspecialchars($dato);
            return $dato;
        }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">/
        <!--ENCTYPE  is very important option to send data to server, 
        this will not encoded form-data before sent to server. 
        This form encoded option is needed when you are sending file data 
        from client to server like file upload.
        Cuando enviamos archivos tenemos que usar POST (get no) -->
        <p>Titulo:<input type="text" name="titulo">
            <span class="error">
                * <?php if (isset($err_titulo)) echo $err_titulo?>
            </span>
        </p>

        <p>Precio:<input type="text" name="precio">
            <span class="error">
                * <?php if (isset($err_precio)) echo $err_precio?>
            </span>
        </p>
        <p>Consola:
            <select name="consola">
                <!--Es un desplegable-->
                <option value="" selected disabled hidden>Elija consola:</option>
                <!--1er desplegable en blanco.-->
                <option value="ps4">Playstation 4</option>
                <option value="ps5">Playstation 5</option>
                <option value="switch">Nintendo Switch</option>
            </select>
            <span class="error">
                * <?php if (isset($err_consola)) echo $err_consola ?>
            </span>
        </p>

        <p>Descripcion:<textarea name="descripcion"></textarea>
            <!--Area donde se puede escribir texto-->
            <span class="error">
                *<?php if (isset($err_descripcion)) echo $err_descripcion?>
            </span>
        </p>
        <p>Insertar imagen: <input type="file" name="imagen"></p>
        <!--Para subir una imagen. 
        ENCTYPE This form encoded option is needed when you are sending file data from client
         to server like file upload.-->
        <p><input type="submit" value="Crear"></p>
        <span class="error">
            *<?php if (isset($err_imagen)) echo $err_imagen?>
        </span>

    </form>
</body>

</html>