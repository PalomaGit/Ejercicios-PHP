<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio VIII de PHP – Relación I</h1>
    <h2>Certificaciones de Profesionalidad</h2>
</header>
<br>

<body>
    <form method="post" action="index.php">
        <div class="contenedor">
            <?php
            if (!isset($_POST["orden"])) {
                ?>
                <table>
                    <thead>
                        <th colspan="3">Este programa ordena tres números.</th>
                    </thead>
                    <tbody>
                        <tr class="linea-medio">
                            <td>
                                <b>Número 1:</b>
                            </td>
                            <td><input type="number" name="num1" required></td>

                        </tr>
                        <tr class="linea-medio">
                            <td><b>
                                    Número 2:
                                </b></td>

                            <td><input type="number" name="num2" required></td>

                        </tr>
                        <tr>
                            <td><b>
                                    Número 3:
                                </b></td>

                            <td><input type="number" name="num3" required></td>

                        </tr>

                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="orden">Aceptar</button>
                    <br><br>
                    <p>
                        <a href="../index.html">>> Ir a la página principal</a>
                    </p>
                </div>

                <?php

            } else {

                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                if ($num1>$num2) {
                    $aux=$num1;
                    $num1=$num2;
                    $num2=$aux;
                }
                if ($num2>$num3) {
                    $aux=$num2;
                    $num2=$num3;
                    $num3=$aux;
                }
                if ($num1>$num2) {
                    $aux=$num1;
                    $num1=$num2;
                    $num2=$aux;
                }
                

                echo "<div class='resultado'>Los números introducidos ordenados de menor a mayor son $num1, $num2 y $num3.</div>";
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