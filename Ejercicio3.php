<?php
/**
 * Crea una variable entera aleatoria llamada “edad” y muéstrala por pantalla. 
 * Si la edad es mayor de 65 años, muestra por pantalla el mensaje “Ya puedes disfrutar de la jubilación”. 
 * Si la edad está entre 18 y 65 (incluídos) muestra por pantalla “Estás en edad laboral”. 
 * Si la edad es menor de 18 muestra “Todavía no puedes trabajar”.
 */
$edad=random_int(1,120);
echo $edad;
echo "</br>";
if($edad>=18&&$edad<=65){
    echo "Estás en edad laboral";
}else if($edad<18){
    echo "Todavía no puedes trabajar";
}else if($edad>65){
    echo "Ya puedes disfrutar de la jubilación";
}