<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esercizio</title>
        <?php
        $random = RAND(1, 3); echo $random;
        if($random == 1){
            echo '<link href="style_1.css" rel="stylesheet">';
        } elseif($random == 2){
            echo '<link href="style_2.css" rel="stylesheet">';
        } else {
            echo '<link href="style_3.css" rel="stylesheet">';
        }
        ?>
    </head>
        <body>
            <h1>CSS casuali</h1>
            <?php
                for ($i = 1; $i <= 10; $i++){
                    echo "<div class='divpari'>Questo è un div pari</div>";
                    echo "<div class='divdispari'>Questo è un div dispari</div>";
                }
            ?>
            <div>Questa è la fine della pagina</div>
        </body>
    </head>
</html>