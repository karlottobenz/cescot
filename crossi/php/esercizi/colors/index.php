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
                if($i % 2 != 0) {
                    echo "<div class='dispari'>io sono dispari</div>";
                } else {
                    echo "<div class='pari'>io sono pari</div>";
                }
            }
        ?>
        <div>fine pagina</div>
    </body>
</html>