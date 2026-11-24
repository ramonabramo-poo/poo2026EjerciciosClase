<?php
// vamos a crear un array enumerado de arrays asociativos

$alumnos = [
    [
        "nombre" => "Ana", // $alumnos[0]['nombre']
        "edad" => 20,
        "curso" => "PHP"
    ],
    [
        "nombre" => "Juan",
        "edad" => 22,
        "curso" => "JavaScript" // $alumnos[1]['curso']
    ],
    [
        "nombre" => "María",
        "edad" => 21,
        "curso" => "Python"
    ]
];


// mostrar el array en una tabla 

?>

<table>
    <tr>
        <?php
        // opcion1
        $campos = array_keys($alumnos[0]); // ['nombre', 'edad', 'curso']
        foreach ($campos as $campo) {
            echo "<th>$campo</th>";
        }
        // opcion2
        // $campos = array_keys($alumnos[0]);
        // echo "<th>" . implode("</th><th>", $campos) . "</th>";

        // opcion3
        // foreach ($alumnos[0] as $campo => $valor) {
        //     echo "<th>$campo</th>";
        // }

        // opcion4
        // foreach(array_keys($alumnos[0]) as $campo) {
        //     echo "<th>$campo</th>";
        // }



        ?>
    </tr>
    <?php foreach ($alumnos as $alumno): ?>
        <tr>
            <?php foreach ($campos as $campo): ?>
                <td><?php echo $alumno[$campo]; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>