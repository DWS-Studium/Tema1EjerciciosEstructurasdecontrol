<?php
/**
 * Crea un array con notas aleatorias de una asignatura. 
 * Recorre el array para mostrar todas las notas por pantalla.
 */
for($i=0;$i<20;$i++){
    $notas[$i] = rand(1,10);
}

  foreach ($notas as $nota){
    echo $nota."<br/>";
  }