<?php

/**
 * Crea un array con notas aleatorias. Muestra por pantalla sólo las notas que están aprobadas.
 */
for ($i = 0; $i < 20; $i++) {
    $notas[$i] = rand(1, 10);
}

foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo $nota . "<br/>";
    }
}
