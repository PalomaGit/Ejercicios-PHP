<?php
session_start();

//si la sesión es nueva (no existen suma y contador) se crean y valen 0
if (!isset($_SESSION["suma"])) { //primera recarga de la pagina
    $_SESSION["suma"] = 0;
    $_SESSION["contador"] = 0;
}

// creamos y declaramos variables
$mostrarMedia = false;
$media = 0;

//si la petición es POST (se ha enviado el formulario), 
//entonces entra en este bloque y procesa el número enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num = $_POST["numero"]; //lee el valor

    if ($num >= 0) {
        $_SESSION["suma"] += $num;
        $_SESSION["contador"]++;
    } else {
        if ($_SESSION["contador"] > 0) {
            $media = $_SESSION["suma"] / $_SESSION["contador"];
            $mostrarMedia = true;
        }
        // reiniciamos para poder volver a usar
        session_destroy();
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calcular media</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <header>
        <h1>Ejercicio X de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>

    <div class="contenedor">
        <?php if ($mostrarMedia) { ?>
            <h2>La media de los números introducidos es: <?= $media ?></h2>
            <a href="index.php"><button>Volver a empezar</button></a>
        <?php } else { ?>
            <form method="post" action="index.php">
                <table>
                    <tr>
                        <td>
                            <b>Introduce un número positivo (un número negativo termina el programa):</b>
                        </td>
                        <td><input type="number" name="numero" required></td>
                    </tr>
                </table>
                <br>

            </form>
            <div class="botones">
                <br>
                <button type="submit">Aceptar</button>
            </div>
            <p>
                <b>Números introducidos hasta ahora:</b> <?= $_SESSION["contador"] ?> <br>
                <b>Suma acumulada:</b> <?= $_SESSION["suma"] ?>
            </p>
            <div class="botones">
                <br><br>

                <p><a href="../index.html">>> Ir a la página principal</a></p>
            </div>
        <?php } ?>
    </div>

    <footer>
        <h2>© Paloma Ocaña Piña</h2>
    </footer>
</body>

</html>