<?php
// operador ternario

$nota = 0;
$resultado = '';

$nota = random_int(0, 10);

$resultado = ($nota >= 5) ? 'Aprobado' : 'Suspenso';

?>

<ul>
    <li>Nota: <?= $nota ?> </li>
    <li>Resultado: <?= $resultado ?></li>
</ul>