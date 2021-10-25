<?php
/**
 * Mostrar por pantalla todos los divisores de un número obtenido de forma aleatoria con la función rand().
 */
$x=rand(0,100);
echo 'Numero generado: '.$x.'</br>';
for($i=1;$i<=$x;$i++){
    if($x%$i==0){
        echo $i.'</br>';
    }
}