<html>
    <head>
        <title>Esercizio</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Colori</h1>
        <?php
            $n = RAND(5, 30);
            for($i = 1; $i <= $n; $i++){
                $n2 = RAND(1, 3);
                echo "<div class='casuale$n2'>div casuale</div>";

            }
        ?>
        <div>fine pagina</div>
    </body>
</html>