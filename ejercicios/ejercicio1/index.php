<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Euros a Pesetas</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <header>
        <h1>Ejercicio I de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>
    <br>
    <form method="post" action="index.php">
        <div class="contenedor">

            <?php
            if (!isset($_POST["conversor"])) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Conversor Euros → Pesetas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Euros</b></td>
                            <td>
                                <input type="text" name="EUR" required>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="conversor">Convertir</button>
                    <br><br>
                    <p>
                        <a href="../index.html">>> Ir a la página principal</a>
                    </p>
                </div>


                <?php

            } else {
                $cambio = 166.386;
                $euro = $_POST["EUR"];


                $resultado = $euro * $cambio;
                echo "<h2>$euro € son $resultado pesetas</h2><br>"; ?>


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