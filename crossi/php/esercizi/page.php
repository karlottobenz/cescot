<?php
    include ('lib/libreria.php')
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagina di prova</h1>
    <?php
    for ($i = 1; $i <= 15; $i++){
        echo("<div>Questo è il div numero $i</div>");
    }
    ?>
    <div class="closing">questa è la fine della pagina</div>
    
</body>
</html>