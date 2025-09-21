<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Baraja</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <header>
        <h1>Ejercicio XIV de PHP – Relación I</h1>
        <h2>Certificaciones de Profesionalidad</h2>
    </header>

    <div class="contenedor">
        <?php
        $palos = ['oros', 'copas', 'espadas', 'bastos'];
        $figuras = ['as', '2', '3', '4', '5', '6', '7', 'sota', 'caballo', 'rey'];

        $puntos_brisca = [
            'as' => 11,
            '3' => 10,
            'rey' => 4,
            'caballo' => 3,
            'sota' => 2,
            '7' => 0,
            '6' => 0,
            '5' => 0,
            '4' => 0,
            '2' => 0
        ];

        $baraja = [];
        foreach ($palos as $palo) {
            foreach ($figuras as $figura) {
                $baraja[] = [
                    'figura' => $figura,
                    'palo' => $palo,
                    'puntos' => $puntos_brisca[$figura]
                ];
            }
        }

        shuffle($baraja);

        $mano = array_slice($baraja, 0, 10);

        $total_puntos = 0;
      
            foreach ($mano as $carta) {
                echo "{$carta['figura']} de {$carta['palo']} - {$carta['puntos']} puntos<br>";
                $total_puntos += $carta['puntos'];
            }  ?>
             <?php
            echo "<div class='resultado'><br><strong>Total: $total_puntos puntos</strong></div>";
            ?>
        
        <br><br>
        <p><a href="../index.html">>> Ir a la página principal</a></p>
    </div>

    <footer>
        <h2>© Paloma Ocaña Piña</h2>
    </footer>
</body>

</html>