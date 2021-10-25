<?php
/**
 * En un edificio hay 5 pisos y en cada piso hay 4 puertas. 
 * Imprimir usando las menos intrucciones posibles una lista 
 * de todas las direcciones del edificio.
 */
	for ($piso=1;$piso<=5;$piso++) {
		for ($puerta=1;$puerta<=4;$puerta++) {
			echo ("Piso: $piso. - Puerta: $puerta.<br>");
		}
	}