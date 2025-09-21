<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio IX de PHP – Relación I</h1>
    <h2>Certificaciones de Profesionalidad</h2>
</header>
<br>

<body>
    <form method="post" action="index.php">
        <div class="contenedor">
            <?php
            if (!isset($_POST["mult"])) {
                ?>
                <table>

                    <tbody>
                        <tr>
                            <td>
                                <b>Por favor, introduzca un número del 0 al 10: </b>
                            </td>
                            <td><input type="number" name="num" required></td>

                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="mult">Aceptar</button>
                    <br><br>
                    <p>
                        <a href="../index.html">>> Ir a la página principal</a>
                    </p>
                </div>

                <?php

            } else {
                $num = $_POST["num"];
                echo "<table>";
                echo "<thead><tr><th colspan='2'>Tabla de multiplicar del $num</th></tr></thead>";
                echo "<tbody>";
                for ($i = 0; $i <= 10; $i++) {
                    $resultado = $num * $i;
                    echo "<tr><td>$num x $i = $resultado</td></tr>";
                }
                echo "</tbody></table>";

            }

            ?>

            <div class="botones">
                <a href="index.html"><button>Volver</button></a>
            </div>
            <?php
            ?>
        </div>
    </form>
</body>

<footer>
    <h2>© Paloma Ocaña Piña</h2>
</footer>

</html>