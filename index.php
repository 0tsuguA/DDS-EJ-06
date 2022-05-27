<?php

//Mostrar la tabla de multiplicar del 2, utilizando un for (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//2 * 1 = 2
//2 * 2 = 4
//2 * 3 = 6

for ($i=1; $i <=20 ; $i++) { 
    $resultado=2*$i;   
    echo '2* '. $i . '= '. $resultado . '<hr>' ;
}