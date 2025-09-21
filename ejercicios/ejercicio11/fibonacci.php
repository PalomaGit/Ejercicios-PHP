<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <header>
        <h1>Ejercicio XI de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $numero = $_POST["numero"];
        $num = 0;
        $siguiente=1;
    ?>
         
        <div class="resultado">
        <?php for ($i = 0; $i < $numero; $i++) {
            echo $num, ' ' ;
            $siguiente = $num + $siguiente;
            $num = $siguiente - $num;
        }
    }
    session_destroy();
    ?>
    </div>
    <div class="botones">
        <p><a href="../index.html">>> Ir a la página principal</a></p>
    </div>


    <footer>
        <h2>© Paloma Ocaña Piña</h2>
    </footer>
</body>

</html>