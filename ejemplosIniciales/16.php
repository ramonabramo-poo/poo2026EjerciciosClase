<?php
/*
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
if ($nota < 5) {
    $resultado = 'Suspenso';
} elseif ($nota < 6) {
    $resultado = 'Aprobado';
} elseif ($nota < 7) {
    $resultado = 'Bien';
} elseif ($nota < 9) {
    $resultado = 'Notable';
} else {
    $resultado = 'Sobresaliente';
}

// salida
?>
<ul>
    <li>Nota: <?= $nota ?></li>
    <li>Resultado: <?= $resultado ?></li>
</ul>