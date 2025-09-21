<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVA</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio III de PHP – Relación I</h1>
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
                    <thead>
                        <tr>
                            <th colspan="2">Volumen de un cono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Radio (en cm)</b></td>
                            <td>
                                <input type="number" name="RADIO" required>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Altura (en cm)</b></td>
                            <td>
                                <input type="number" name="ALTURA" required>
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

                $RADIO = $_POST["RADIO"];
                $ALTURA = $_POST["ALTURA"];

                $VOLUMEN = (1/3) * M_PI * $RADIO * $RADIO * $ALTURA;
                
                echo "<h2>El volumen del cono es: ", round($VOLUMEN,2), " cm³.</h2><br>"; ?>


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