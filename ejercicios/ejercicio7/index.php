<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medianoche</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio VII de PHP – Relación I</h1>
    <h2>Certificaciones de Profesionalidad</h2>
</header>
<br>

<body>
    <form method="post" action="index.php">
        <div class="contenedor">
            <?php
            if (!isset($_POST["segundos"])) {
                ?>
                <table>
                    <thead>
                        <th colspan="3">A continuación deberá introducir una hora del día.</th>
                    </thead>
                    <tbody>
                        <tr class="linea-medio">
                            <td>
                                <b>Hora:</b>
                            </td>
                            <td><input type="number" name="hora" required></td>

                        </tr>
                        <tr>
                            <td><b>
                                    Minutos:
                                </b></td>

                            <td><input type="number" name="min" required></td>

                        </tr>

                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="segundos">Aceptar</button>
                    <br><br>
                    <p>
                        <a href="../index.html">>> Ir a la página principal</a>
                    </p>
                </div>

                <?php

            } else {

                $hora = $_POST["hora"];
                $min = $_POST["min"];

                $segundosActuales = $hora * 3600 + $min * 60;

                $segundosDia = 24 * 3600;

                $segundosRestantes = $segundosDia - $segundosActuales;

                echo "<div class='resultado'> Faltan $segundosRestantes segundos para la medianoche.</div>";

            }
            ?>

                <div class="botones">
                    <a href="index.html"><button>Volver</button></a>
                </div>
        </div>
    </form>
</body>

<footer>
    <h2>© Paloma Ocaña Piña</h2>
</footer>

</html>