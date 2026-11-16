<?php
// ENUNCIADO:
// Obtener un numero de forma aleatoria entre -10 y 10
// Indicar en pantalla si el número generado es PAR o IMPAR.
// Debe mostrarse el número y el resultado de la comprobación.

// ALGORITMO
// 1) Crear una variable $numero e inicializarla a 0
// 2) Crear una variable $mensaje para almacenar la respuesta.
// 3) Simular la entrada de datos en numero mediante la funcion ramdom_int(-10, 10).
// 4) Comprobar mediante IF-ELSE si el número es PAR o IMPAR.
// 5) Si se cumple: asignar "es par" a la variable $mensaje.
// 6) Si no se cumple: asignar "es impar" a la variable $mensaje.
// 7) Mostrar por pantalla el número y su estado.

// constantes
define('MINIMO', -10);
const MAXIMO = 10;

// declarar e inicializar
$numero = 0;
$mensaje = '';
$resto = 0;

// entrada
$numero = random_int(MINIMO, MAXIMO);

$resto = $numero % 2;


if ($resto == 0) {
    $mensaje = 'es par';
} else {
    $mensaje = 'es impar';
}
?>
<ul>
    <li>Numero: <?= $numero ?></li>
    <li>Estado: <?= $mensaje ?></li>
</ul>