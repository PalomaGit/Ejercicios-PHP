<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio IV de PHP – Relación I</h1>
    <h2>Certificaciones de Profesionalidad</h2>
</header>
<br>

<body>
    <form method="post" action="index.php">
        <div class="contenedor">
            <?php
            if (!isset($_POST["calculo"])) {
                ?>
                <table>
                    <tbody>
                        <tr>
                            <td><b>Por favor, introduzca una hora del día (0 - 23): </b></td>
                            <td>
                                <input type="number" name="hora" required>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="calculo">Aceptar</button>
                    <br><br>
                    <p>
                        <a href="../index.html">>> Ir a la página principal</a>
                    </p>
                </div>

                <?php

            } else {

                $hora = $_POST["hora"];


                switch (true) {
                    case ($hora >= 6 && $hora < 13):
                        echo "<h2>¡Buenos días!</h2>";
                        break;
                    case ($hora >= 13 && $hora < 21):
                        echo "<h2>¡Buenas tardes!</h2>";
                        break;
                    case (($hora >= 21 && $hora <= 23) || ($hora >= 0 && $hora < 6)):
                        echo "<h2>¡Buenas noches!</h2>";
                        break;
                    default:
                        echo "<h2>La hora introducida no es correcta</h2>";
                        break;
                }

                ?>

                <div class="botones">
                    <a href="index.html"><button>Volver</button></a>
                </div>
                <?php

            }
            ?>
        </div>
    </form>
</body>

<footer>
    <h2>© Paloma Ocaña Piña</h2>
</footer>

</html>