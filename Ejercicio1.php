<?php
/**
 * Crea un array con notas aleatorias de una asignatura. 
 * Si la media de las notas da aprobado, muestra por pantalla un mensaje de felicitación. 
 * En caso contrario muestra un mensaje con la media que ha sacado.
 */
for($i=0;$i<20;$i++){
    $notas[$i] = rand(1,10);
}

  $media = array_sum($notas)/count($notas);
	
  if ($media >= 5) {
echo "Felicidades.";
  } else {
echo "Has sacado un $media de media.";
  }