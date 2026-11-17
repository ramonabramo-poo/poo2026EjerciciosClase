<?php
/*
SELECCION MULTIPLE

if (condicion1) {
    si se cumple la condicion1
}elseif( condicion2 ) {
    si se cumple la condicion2
}elseif( condicion3 ) {
    si se cumple la condicion3
}else {
    si ninguna de las condiciones se cumple    
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

// declarar
$dia = 0;
$salida = ''; // esta variable va a tener el mensaje a mostrar

// entrada
// simulo una entrada de datos con un numero aleatorio
$dia = random_int(1, 9);

// procesamiento

if ($dia == 1) {
    $salida = "Lunes";
} elseif ($dia == 2) {
    $salida = "Martes";
} elseif ($dia == 3) {
    $salida = "Miercoles";
} elseif ($dia == 4) {
    $salida = "Jueves";
} elseif ($dia == 5) {
    $salida = "Viernes";
} elseif ($dia == 6) {
    $salida = "Sabado";
} elseif ($dia == 7) {
    $salida = "Domingo";
} else {
    $salida = "No es un dia de la semana";
}

// salida
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <ul>
        <li>Dia introducido: <?= $dia ?></li>
        <li>Dia en texto: <?= $salida ?></li>
    </ul>
</body>

</html>