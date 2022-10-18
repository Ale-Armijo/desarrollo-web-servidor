<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejercicios de clase de formularios</h1>
    <div>
        <h2 id="ej1">Ejercicio 1</h2>
        <p>Crear un formulario con las etiquetas Nombre, Edad y el boton Enviar</p>
        <form action="#ej1" method="POST">
            <!--He borrado el nombre de la pag anterior "ejercicio1.php"-->
            <label>Nombre</label><br>
            <input type="text" name="nombre" placeholder="Escriba su nombre:"><br><br>
            <label>Apellidos</label><br><br>
            <input type="text" name="apellidos" placeholder="Escriba su apellido:"><br><br>
            <label>Edad</label><br>
            <input type="text" name="edad" placeholder="Escriba su edad:"><br><br>
            <label>Direccion</label><br><br>
            <input type="text" name="direccion" placeholder="Escriba su direccion:"><br><br>
            <input type="hidden" name="f" value="ej1">
            <!--Añado el hidden-->
            <input type="submit" value="Enviar">
            <h2 id="ej1">Respuesta al ejercicio 1:</h2>
            <br><br>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                if($_POST["f"]== "ej1"){
                    //echo "<p>Exito!</p>";
                    //Ahora copiamos de la pagina ejercicio_respuesta la logica que está dentro del PHP.
                    $nombre=$_POST["nombre"];
                    $nombre=ucwords(strtolower($nombre));
                    $apellidos= $_POST["apellidos"];
                    $apellidos=ucwords(strtolower($apellidos));
                    $edad= $_POST["edad"];
                    $direccion= $_POST["direccion"];
                    
                    echo "<p>Su nombre es $nombre</p>";
                    echo "<p>El apellido de $nombre es $apellidos</p>";
                    echo "<p>La edad de $nombre es $edad</p>";
                    echo "<p>La direccion de $nombre es $direccion</p>";
                }
            }
        ?>
    </div>

    <div>
        <h2 id="ej2">Ejercicio 2</h2>
        <p>Crear un formulario que reciba un número.
            Generar una lista dinámicamente con tantos
            elementos como se haya indicado</p>
        <form action="#ej2" method="POST">
            <!--Bloque de formulario-->
            <!--He borrado lo de dentro del action-->
            <label>Numero 1</label><br><br>
            <input type="text" name="numero1" placeholder="Escriba un numero:"><br><br>
            <label>Numero 2</label><br><br>
            <input type="text" name="numero2" placeholder="Escriba otro numero:"><br><br>
            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="Enviar formulario">
            <h2 id="ej2">Respuesta al ejercicio 2:</h2>
            <br><br>
        </form>
        <?php  //Es la etiqueta php para la respuesta.
            if ($_SERVER["REQUEST_METHOD"]== "POST"){
                IF($_POST["f"]== "ej2"){
                    $n1 = $_POST["numero1"];
                    for ($i= 1; $i<= $n1; $i++){//siempre que i sea menor que numero.
                        echo "<li>$i</li>";//imprime los numeros en una lista
                    }
                    echo "<br><br>";
                        $n2 = $_POST["numero2"];
                        for($i=1; $i<= $n2; $i++){
                        echo"<li>$i</li>";
                    }
                }
            }
        ?>
    </div>

    <div>
        <h2 id="ej3">Ejercicio 3</h2>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y
            muestre por pantalla si es menor de edad, es adulta, o está jubilada en
            función a su edad. Además:
            - Convertir la edad a un número entero
            - Convertir el nombre introducido a minúsculas salvo la primera letra,
            que será mayúscula</p>
        <form action="#ej3" method="POST">
            <!--borro el action-->
            <label>Nombre</label><br><br>
            <input type="text" name="nombre" placeholder="Escriba su nombre:"><br><br>
            <label>Edad</label><br><br>
            <input type="text" name="edad" placeholder="Escriba su edad:"><br><br>
            <!--añado hidden-->
            <input type="hidden" name="f" value="ej3">
            <input type="submit" value="Enviar formulario">
            <h2 id="ej3">Respuesta al ejercicio 3:</h2>
            <br><br>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if ($_POST["f"]=="ej3"){
                    $nombre=$_POST["nombre"];
                    $nombre= ucwords(strtolower($nombre));
                    $edad=(int)$_POST["edad"];
                    if($edad<=1 && $edad >=0){
                        echo"$nombre es un bebé.";
                    }else if ($edad<18 && $edad >= 0){
                        echo "<p>$nombre es menor de edad.</p>";
                    }else if($edad>= 18 && $edad <=65){
                        echo "<p>$nombre es adulto.</p>";
                    }else if($edad>65 && $edad <130){
                        echo "<p>$nombre es jubilado</p>";
                    }else{
                        echo "<p>La edad no es valida</p>";
                    }
                }
            }
        ?>
    </div>

    <div>
        <h2 id="ej4">Ejercicio 4</h2>
        <!--Con id="ej4" hacemos q al enviar el formulario nos quedemos en el eje3, y no se nos vaya arriba del todo.-->
        <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
            en un encabezado d.
            Si introducimos "5" y "Hola mundo" se mostrará un encabezado Hola mundo</p>
        <form action="#ej4" method="POST">
            <!--Con action= "#ej4" hacemos que al enviar en form se nos quede en ese mismo eje, y no se suba arriba.-->
            <label>Frase</label><br><br>
            <input type="text" name="frase" placeholder="Escriba una frase:"><br><br>
            <label>Encabezado</label><br><br>
            <input type="text" name="encabezado" placeholder="Escriba un encabezado:"><br><br>
            <input type="hidden" name="f" value="ej4">
            <input type="submit" value="Enviar">
            <h2 id="ej4">Respuesta al ejercicio 4:</h2>
            <br><br>
        </form>
        <?php    // Etiqueta PHP de respuesta.
            if ($_SERVER ["REQUEST_METHOD"]== "POST"){
                if ($_POST["f"] == "ej4"){               
                    $frase=$_POST["frase"];
                    $e=$_POST["encabezado"];
                    echo "<h$e>$frase</h$e>";
                }
            }
        ?>

    </div>



    <div>
        <h2 id="ej5">Ejercicio 5</h2>
        <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.
            Asegurarse de que funciona con cualquier valor válido.
            No se admiten exponentes negativos.</p>
        <form action="#ej5" method="POST">
            <label>Base</label><br><br>
            <input type="text" name="base" placeholder="Escriba la base:"><br><br>
            <label>Exponente</label><br><br>
            <input type="text" name="exponente" placeholder="Escriba el exponente:"><br><br>
            <input type="hidden" name="f" value="ej5">
            <input type="submit" value="Enviar formulario">
            <h2 id="ej5">Respuesta al ejercicio 5:</h2>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["f"]== "ej5"){
                require 'funciones/potencia.php';//importamos la funcion potencia.
                $base=$_POST["base"];
                $exponente=$_POST["exponente"];
                $resultado=potencia($base, $exponente);
                if($resultado==-1){//Error.
                    echo "<p>Error. El numero no puede ser negativo</p>";
                } else{
                    echo"<p>El resultado es $resultado</p>";
                }
            }
        }
        ?>
    </div>

    <div>
        <h2 id="ej6">Ejercicio 6</h2>
        <p>Formulario que reciba un número y devuelva su factorial.
            Factorial de 3: 1*2*3 = 6
            Factorial de 5: 1*2*3*4*5 = 120</p>
        <form action="#ej6" method="post">
            <p>Número:</p>
            <input type="text" name="numero" placeholder="Escriba un numero:"><br><br>
            <input type="hidden" name="f" value="ej6">
            <input type="submit" value="Enviar">
            <h2 id="ej6">Respusta al ejercicio 6:</h2>
            <br><br>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            if ($_POST["f"]=="ej6"){
                require 'funciones/factorial.php';//importamos la funcion factorial.
                $numero = $_POST["numero"];
                $resultado = factorial($numero);//se va acumulando el bucle.Debe estar fuera del bucle.
                echo"<p>El resultado es $resultado</p>";
            }

        }
        
    ?>
    </div>



    <div>
        <h2 id="ej7">Ejercicio 7 - Formulario de elegir consolas.</h2>
        <p>
            Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.
            Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
            40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirá mediante un
            campo
            select.
            Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un checkbox.</p>
        <form action="#ej7" method="post">
            <label>Nombre del Videojuego</label><br><br>
            <input type="text" name="nombre" placeholder="Escriba el nombre del videojuego."><br><br>
            <label>Consola</label><br><br>
            <input type="text" name="consola" placeholder="Escriba el nombre de la consola">
            <select name="consola">
                <!--//desplegable-->
                <option value="ps4">PS4</option>
                <option value="ps5">PS5</option>
                <option value="switch">Switch</option>
            </select><br><br>
            <label>¿Edición especial?</label><br>
            <input type="checkbox" value="especial" value="si"><br><br>
            <input type="hidden" name="f" value="ej7">
            <input type="submit" value="Enviar formulario">
            <h2 id="ej7">Respuesta al ejercicio 7:</h2>
        </form>
        <?php
        
        ?>
    </div>



    <div>
        <h2 id="ej8">Ejercicio 8 - Tabla de multiplicar</h2>
        <p>Formulario de la tabla de multiplicar</p>

        <form action="#ej8" method="post">
            <label>Elige una tabla:</label><br>
            <select name="tabla">
                <option value="1">Tabla del 1</option>
                <option value="2">Tabla del 2</option>
                <option value="3">Tabla del 3</option>
                <option value="4">Tabla del 4</option>
                <option value="5">Tabla del 5</option>
                <option value="6">Tabla del 6</option>
                <option value="7">Tabla del 7</option>
                <option value="8">Tabla del 8</option>
                <option value="9">Tabla del 9</option>
                <option value="10">Tabla del 10</option>
            </select>
            <input type="hidden" name="f" value="ej7">
            <input type="submit" value="Mostrar la tabla">
            <h2 id="ej7">Respuesta al ejercicio 8 Tablas:</h2>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["f"]=="ej8"){
            $tabla = (int)$_POST["tabla"];

            echo "<table>";
            echo "<tr><th>Tabla del $tabla</th></tr>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$tabla x $i = " . $tabla * $i ."</td>";
                echo "</tr>";
            }
            echo "</table>";
            }
        }
        ?>

    </div>




    <div>
        <h2><a href="ejercicio_prueba.php">Formulario con respuesta misma pagina.</a>
        </h2>
        <p>Formulario con respuesta misma pagina</p>
    </div>

    </div>

</body>

</html>