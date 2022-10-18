<?php
/*Devuelve el resultado de elevar $base a $exponente.
Si la $exponente es menor que cero, devuelve -1 */

    function potencia (int $base, int $exponente){//se puede indicar el tipo (int) o no. 
        $resultado= 1;
        if($exponente<0){
            $resultado= -1;//este es el codigo de error; si el exponente es <0.
        }else if($exponente==0){
            $resultado=1;
        }else{
            for ($i=1; $i <=$exponente; $i ++){
               // $resultado=$resultado * $base;
                $resultado *=$base;//Ambos son iguales.
            }
        }
        return $resultado;
    }
?>