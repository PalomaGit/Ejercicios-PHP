<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>


<header>
    <h1>Ejercicio VI de PHP – Relación I</h1>
    <h2>Certificaciones de Profesionalidad</h2>
</header>
<br>

<body>
    <form method="post" action="index.php">
        <div class="contenedor">
            <?php
            if (!isset($_POST["horoscopo"])) {
                ?>
                <table>
                    <thead>
                        <th colspan="3">Este programa le dirá cuál es su horóscopo a partir de su fecha de nacimiento.</th>
                    </thead>
                    <tbody>
                        <tr class="linea-medio">
                            <td>
                                <b>Introduzca el número del mes en que nació (1-12):</b>
                            </td>
                            <td><input type="number" name="mes" required></td>

                        </tr>
                        <tr>
                            <td><b>
                                    Introduzca el día:
                                </b></td>

                            <td><input type="number" name="dia" required></td>

                        </tr>

                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="horoscopo">Aceptar</button>
                    <br><br>
                    <p>
                        <a href="../index.html">>> Ir a la página principal</a>
                    </p>
                </div>

                <?php

            } else {

                $mes = $_POST["mes"];
                $dia = $_POST["dia"];

                $signo = "";

                switch ($mes) {
                    case 1:  // Enero
                        $signo = ($dia <= 19) ? "Capricornio" : "Acuario";
                        break;
                    case 2:  // Febrero
                        $signo = ($dia <= 18) ? "Acuario" : "Piscis";
                        break;
                    case 3:  // Marzo
                        $signo = ($dia <= 20) ? "Piscis" : "Aries";
                        break;
                    case 4:  // Abril
                        $signo = ($dia <= 19) ? "Aries" : "Tauro";
                        break;
                    case 5:  // Mayo
                        $signo = ($dia <= 20) ? "Tauro" : "Géminis";
                        break;
                    case 6:  // Junio
                        $signo = ($dia <= 20) ? "Géminis" : "Cáncer";
                        break;
                    case 7:  // Julio
                        $signo = ($dia <= 22) ? "Cáncer" : "Leo";
                        break;
                    case 8:  // Agosto
                        $signo = ($dia <= 22) ? "Leo" : "Virgo";
                        break;
                    case 9:  // Septiembre
                        $signo = ($dia <= 22) ? "Virgo" : "Libra";
                        break;
                    case 10: // Octubre
                        $signo = ($dia <= 22) ? "Libra" : "Escorpio";
                        break;
                    case 11: // Noviembre
                        $signo = ($dia <= 21) ? "Escorpio" : "Sagitario";
                        break;
                    case 12: // Diciembre
                        $signo = ($dia <= 21) ? "Sagitario" : "Capricornio";
                        break;
                    default:
                        $signo = "Fecha inválida";
                }

                $mensaje_cumple = ($dia == date("d") && $mes == date("m")) ? " 🎉 ¡Feliz cumpleaños! 🎂" : "";

                echo "<div class='resultado'>Tu signo del zodiaco es: <strong>$signo</strong><br>$mensaje_cumple</div>";
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