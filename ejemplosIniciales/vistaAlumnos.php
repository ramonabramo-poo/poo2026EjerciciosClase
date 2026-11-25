<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
        <?php
        foreach ($alumnos as $alumno) {
            // moviendo por los registros (alumnos)
            echo "<tr>";
            foreach ($alumno as $valor) {
                // mostrandos los datos de cada alumno
                echo "<td>{$valor}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>