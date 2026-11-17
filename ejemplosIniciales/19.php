<?php
/*
TEORIA
switch(variable){
case valor1:
    instrucciones;
    break;
case valor2:
    instrucciones;
    break;
case valor3:
    instrucciones;
    break;
default:
    instrucciones;
}



ENUNCIADO
Pido al usuario que introduzca el dia de la semana en numero (1-7)

Si el dia introducido es 1, mostrar "Lunes"
Si el dia introducido es 2, mostrar "Martes"
Si el dia introducido es 3, mostrar "Miercoles"
Si el dia introducido es 4, mostrar "Jueves"
Si el dia introducido es 5, mostrar "Viernes"
Si el dia introducido es 6, mostrar "Sabado"
Si el dia introducido es 7, mostrar "Domingo"
Si el dia introducido no es ninguno de los anteriores  mostrar "No es un dia de la semana"

ALGORITMO
1) Crear una variable dia e inicializarla en 0.
2) Crear una variable para almacenar la salida
3) Pedir un numero por teclado. (SIMULARLO, utilizando la funcion ramdom_int(1, 9))
4) Comprobar si el dia introducido es 1, 2, 3, 4, 5, 6 o 7
5) Mostrar el dia introducido y el dia en texto
*/

// declarar e inicializar
$dia = 0;
$salida = '';

// entradas
$dia = random_int(1, 9);

// procesamiento
switch ($dia) {
    case 1:
        $salida = 'Lunes';
        break;
    case 2:
        $salida = 'Martes';
        break;
    case 3:
        $salida = 'Miercoles';
        break;
    case 4:
        $salida = 'Jueves';
        break;
    case 5:
        $salida = 'Viernes';
        break;
    case 6:
        $salida = 'Sabado';
        break;
    case 7:
        $salida = 'Domingo';
        break;
    default:
        $salida = 'No es un dia de la semana';
        break;
}

?>
<ul>
    <li>Dia introducido: <?= $dia ?></li>
    <li>Dia en texto: <?= $salida ?></li>
</ul>