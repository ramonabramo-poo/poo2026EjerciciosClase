<?php
/*
Quiero realizarlo con un switch
Calculo la nota de forma aleatoria
Quiero que me indique la nota con texto siguiendo los siguientes criterios
nota<5 : suspenso
nota es mayor o igual que 5 y menor que 6: aprobado
nota es mayor o igual que 6 y menor que 7: bien
nota es mayor o igual que 7 y menor que 9: notable
nota es mayor o igual que 9 y menor o igual que 10: sobresaliente

Mostrar la nota con numero y la nota con texto
*/

// constantes de funcionamiento
const MINIMO = 0;
const MAXIMO = 10;

// declarar e inicializar
$nota = 0; // variable para almacenar la nota
$resultado = ''; // variable para almacenar el resultado en modo texto

// entradas
$nota = random_int(MINIMO, MAXIMO);

// procesamiento
switch (true) {
    case ($nota < 5):
        $resultado = 'Suspenso';
        break;
    case ($nota < 6):
        $resultado = 'Aprobado';
        break;
    case ($nota < 7):
        $resultado = 'Bien';
        break;
    case ($nota < 9):
        $resultado = 'Notable';
        break;
    default:
        $resultado = 'Sobresaliente';
        break;
}

// salida
?>
<ul>
    <li>Nota: <?= $nota ?></li>
    <li>Resultado: <?= $resultado ?></li>
</ul>