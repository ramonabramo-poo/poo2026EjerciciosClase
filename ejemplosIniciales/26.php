<?php
const INICIO = 1;
const FIN = 1000;

// Mostrar los numeros del 1 al 1000 en pantala separados por comas

$numero = 1;
while ($numero <= FIN) {
    echo "{$numero},";
    $numero++;
}
