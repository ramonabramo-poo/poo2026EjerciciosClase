<?php

$numero = mt_rand(-2, 12);

// comprobar si el numero es mayor que 0
// si el numero es mayor o igual que 0 indicarlo con un mensaje
// y si menor que cero colocar un mensaje indicandolo

var_dump($numero);

if ($numero >= 0) {
    echo "es mayor que cero";
} else {
    echo "es menor que cero";
}

echo "<hr>";
