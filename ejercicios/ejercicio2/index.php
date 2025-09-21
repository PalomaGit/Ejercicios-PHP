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
    <h1>Ejercicio II de PHP – Relación I</h1>
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
                            <th colspan="2">Cálculo del total de una factura</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Base imponible (en euros)</b></td>
                            <td>
                                <input type="number" name="EUR" min="0" step="0.01" required>
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
                $iva = 0.21;
                $euro = $_POST["EUR"];


                $resultado = ($euro * $iva) + $euro;
                echo "<h2>El total de la factura es ", round($resultado,2)," euros.</h2><br>"; ?>


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