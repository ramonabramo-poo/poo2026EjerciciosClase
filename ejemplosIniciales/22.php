<?php
/*
TEORIA

variable=match(variableEvaluacion){
valor1 => valorAsignacion1;
valor2 => valorAsignacion2;
valor3, valor4 => valorAsignacion3;
default => valorAsignacionDefault;
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
$numero = 0;
$salida = '';

// entradas
$numero = random_int(1, 10);

// procesamiento
$salida = match ($numero) {
    1 => 'Lunes',
    2 =>  'Martes',
    3 => 'Miercoles',
    4 =>  'Jueves',
    5 => 'Viernes',
    6 => 'Sabado',
    7 => 'Domingo',
    default => 'No es un dia de la semana'
};

?>
<ul>
    <li>Numero introducido: <?= $numero ?> </li>
    <li>Salida: <?= $salida ?> </li>
</ul>