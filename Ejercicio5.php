<?php
/**
 * Imprime por pantalla las tablas de multiplicar del 1 al 10 usando bucles for anidados. 
 * Sólo puedes usar una vez la instrucción echo.
 */
for($i=1;$i<=10;$i++){
    for($e=0;$e<=10;$e++){
        echo $i.' x '.$e.' = '.$i*$e.'</br>';
    }
}