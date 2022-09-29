<?php 
    $servidor= 'localhost';
    $usuario='root';
    $contrasena= '';
    $base_datos='peliculas';

    $conexion= new Mysqli($servidor, $usuario,$contrasena,$base_datos)
        or die("Lo sentimos, hay un error de conexion.");
?>