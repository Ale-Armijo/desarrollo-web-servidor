<h1>Ejemplo datos vacíos</h1>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /*  1º - Comprobamos que el nombre se ha
                 introducido    */
        if (empty($_POST["nombre"])) {
            $err_nombre = "*Introduzca el nombre";
        } else {
            /*  2º - Si es necesario, saneamos los
                     datos  */
            $nombre = $_POST["nombre"];
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            /*  3º - Comprobamos que el nombre sigue
                     el patrón deseado  */
            if (preg_match("/^[a-zA-Z áéíóúñÁÉÍÓÚÑ]{2,20}$/", $nombre)) {
                
            } else {
                $err_nombre = "*El nombre tiene que tener entre 2 y 20 caracteres y no puede contener caracteres especiales";
            }
        }
        if (empty($_POST["edad"])) {
            $err_edad = "*Introduzca la edad";
        } else {
            $edad = $_POST["edad"];
        }
    }
?>
