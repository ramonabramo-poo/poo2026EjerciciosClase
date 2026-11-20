<?php
const INICIO = 1;
const FIN = 1000;

// Mostrar los numeros del 1 al 1000 en pantala separados por comas

for ($numero = INICIO; $numero <= FIN; $numero++) {
    echo "{$numero},";
}

$salida = '';

for ($numero = INICIO; $numero <= FIN; $numero++) {
    $salida .= "{$numero},";
}

?>

<?= $salida ?>
