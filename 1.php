<?php

//1. Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.

$N= readline("2");

if ($N == 0) { 
    echo "El numero es cero";
} else {  
    echo ($N % 2 == 0 ) ? "El numero es par": "El numero es impar";
    echo ($N > 0) ? "El numero es positivo": "El numero es negativo";
}
   
?>