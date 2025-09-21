<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio V de PHP – Relación I</h1>
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
                            <td><b>Por favor, introduzca el número de horas trabajadas durante la semana: </b></td>

                        <tr>
                            <td><input type="number" name="horas" required></td>
                        </tr>
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

                $horas = $_POST["horas"];
                $salario = 0;

                if ($horas <= 40) {

                    $salario = $horas * 12;

                } else {

                    $horasExtra = $horas - 40;
                    $salario = (40 * 12) + ($horasExtra * 16);
                }

                echo "<h2>El salario por $horas horas trabajadas es: $salario €</h2>";
            }
            ?>
        </div>
    </form>
</body>

<footer>
    <h2>© Paloma Ocaña Piña</h2>
</footer>

</html>