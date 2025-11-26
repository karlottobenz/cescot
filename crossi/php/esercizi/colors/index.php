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
                echo "<div class='casuale'>div casuale</div>";

            }
        ?>
        <div>fine pagina</div>
    </body>
</html>