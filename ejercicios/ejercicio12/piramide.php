<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pirámide</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <header>
        <h1>Ejercicio XII de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $altura = $_POST["altura"];
        $figura = $_POST["figura"];
        $espacio = " ";

        if ($figura == "Bolita") {
            $figura =  '🎱';
            } elseif ($figura == "Piña") {
                $figura = '🍍';
                } elseif ($figura == "Ladrillo") {
                    $figura =  '🧱';
                    } elseif ($figura == "Pingüino") {
                        $figura =  '🐧';
                        } else {
                            $figura =  '🌞';
                        }
   
    }
    ?>
         
        <div class="resultado">
        <?php
        
        for ($i=1; $i < $altura; $i++) { 
            echo $figura; 
            echo "<br>";
            echo  $figura;
            for ($k = 1; $k < $i; $k++) {
                echo $figura;   
            };
        } echo  $figura;
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