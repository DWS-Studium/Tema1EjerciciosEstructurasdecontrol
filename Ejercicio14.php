<?php
/**
 * Hacer un programa en PHP que en función del valor de la variable $pais, 
 * diga si la nacionalidad de una persona es inglés, alemán, italiano, español, francés u otra.
 */
	$pais="ESPAÑA";
	switch ($pais){
		case "INGLATERRA":
			echo ("El usuario es inglés.");
			break;
		case "ALEMANIA":
			echo ("El usuario es alemán.");
			break;
		case "ITALIA":
			echo ("El usuario es italiano.");
			break;
		case "ESPAÑA":
			echo ("El usuario es español.");
			break;
		case "FRANCIA":
			echo ("El usuario es francés.");
			break;
		default:
			echo ("El usuario es de una nacionalidad no especificada en la lista.");
			break;
	}