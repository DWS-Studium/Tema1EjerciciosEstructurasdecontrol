<?php
/**
 * Mostrar los 20 primeros términos de la sucesión de Fibonacci. 
 * La sucesión de Fibonacci se caracteriza por tener el primer elemento: 
 * 1, el segundo elemento:1 y el resto de elementos: se forman sumando los 2 términos anteriores:
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946, 17711, 28657, 46368, 75025, 121393, 196418, 317811, 514229, 832040, 1346269, 2178309, 3524578, 5702887, 9227465, 14930352, 24157817, 39088169, 63245986, 102334155...
 */
$x=[0,1];
echo '</br>';
for($i=0;$i<20;$i++){
    $z=count($x);
    $x[]=$x[$z-2]+$x[$z-1];
    echo $x[$i].'</br>';
}