<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <header>
        <h1>Ejercicio XIII de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $num = $_POST["num"];
   
    }
    ?>
         
        <div class="resultado">
        <?php
       
        if ($num == 0) {
            echo "El factorial del $num es 1.";
            
        } else {
            $factorial = 1; 
            for ($i=1; $i <= $num; $i++) {
                echo $factorial = $factorial * $i ,"<br>   "; 
                
            }   
            echo "El factorial del $num es $factorial.";
        }
       
      

        
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