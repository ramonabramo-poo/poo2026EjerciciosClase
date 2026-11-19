<?php

$dias = [
    'Lunes',
    'Martes'
];

$meses = array(
    'Enero',
    'Febrero'
);

$meses[] = 'Marzo';

array_push($meses, 'Abril', 'Mayo', 'Junio');

$notas = [
    1 => 'Aprobado',
    2 => 'Suspenso'
];

$notas[4] = 'Aprobado';

// testear el contenido
var_dump('dias', $dias);
var_dump('meses', $meses);
var_dump('notas', $notas);

?>
<ul>
    <li>Primera posicion en dias <?= $dias[0] ?></li>
    <li>El elemento que esta en la segunda posicion en meses es <?= $meses[0] ?></li>
</ul>