<h1>Estructura del If</h1>
<?php
    $numero=3;
    if($numero>0){
        echo "<p>El numero es positivo</p>";
    }else if($numero<0){
        echo"<p>El numero es negativo</p>";
    }else if($numero=0){
        echo "<p>El numero es cero</p>";
    }
    if($numero%2==0){
        echo "<p>El numero es par</p>";
    }else{
        echo"<p>El numero es impar</p>";
    }
    //crear una variable alumno y una variable nota, mostrar x pantalla el nombre y su calificacion.
    //suspenso -5, aprobado 5 y 6, notable, y sobresaliente.
    $alumno="Alejandra";
    $calificacion=10;
    if($calificacion>0 && $calificacion<5){
        echo "<p>Suspenso</p>";
    }else if($calificacion>=5 && $calificacion<7){
        echo "<p>Suficiente</p>";
    }else if($calificacion>=7 && $calificacion <=9){
        echo "<p>Notable</p>";
    }else if($calificacion>=9 && $calificacion <=10){
        echo "<p>Sobresaliente</p>";
    }else{
        echo "La nota no es válida.";
    }
    /* Credenciales correctas: $usuario="admin", $contrasena= "123"...correcto:sesion iniciada si no, respuesta...*/ 

    $usuario="admin";
    $contrasena= "1234";
    if($usuario== "admin" && $contrasena =="123"){
        echo "<p>Sesion iniciada correctamente.</p>";
    }else if($usuario=="admin" && $contrasena != "123"){
        echo "<p>Contraseña erronea.</p>";
    }else{
        echo "<p>El usuario no existe.</p>";
    }
    
?>