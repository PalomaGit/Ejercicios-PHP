<?php
// Array asociativo: letra → número de columna
$columnas = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];
$col = null;
$fila = null;

if (isset($_POST['posicion'])) {
    $pos = $_POST['posicion'];
    $col = $columnas[$pos[0]];
    $fila = (int) $pos[1];

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alfil</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <header>
        <h1>Ejercicio XV de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>

    <div class="tablero">
        <table>
            <tr>
                <td class="etiqueta"></td>
                <?php foreach (array_keys($columnas) as $c) {
                    echo "<td class='etiqueta'>$c</td>";
                } ?>
                <td class="etiqueta"></td>
            </tr>

            <?php
            for ($r = 8; $r >= 1; $r--) {
                echo "<tr>";
                echo "<td class='etiqueta'>$r</td>";
                for ($c = 1; $c <= 8; $c++) {
                    $clase = (($c + $r) % 2 == 0) ? "casilla blanca" : "casilla negra";
                    $contenido = "";
                    if ($col && $fila) {
                        if ($c == $col && $r == $fila) {
                            $clase .= " alfil";
                            $contenido = "♗";
                        } elseif (abs($col - $c) == abs($fila - $r)) {
                            $clase .= " movimiento";
                            $contenido = "♗";
                        }
                    }
                    echo "<td class='$clase'>$contenido</td>";
                }
                echo "<td class='etiqueta'>$r</td>";
                echo "</tr>";
            }
            ?>

            <tr>
                <td class="etiqueta"></td>
                <?php foreach (array_keys($columnas) as $c) {
                    echo "<td class='etiqueta'>$c</td>";
                } ?>
                <td class="etiqueta"></td>
            </tr>
        </table>
    </div>
    <form method="post">
        <td>
            Introduzca las coordenadas del alfil (p. ej. e4): 
        </td>
        <br><br>
        <input name="posicion" placeholder="e4" required><br><br>
        <button>Aceptar</button>
    </form>
    <br><br>
    <p><a href="../index.html">>> Ir a la página principal</a></p>
    </div>



</body>
<footer>
    <h2>© Paloma Ocaña Piña</h2>
</footer>>

</html>