<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagina di prova</h1>
    <?php
    for ($i = 1; $i <= 15; $i++){
        echo("<div>Questo è il div numero $i</div>") "numbered";
    }
    ?>
    <div class="closing">questa è la fine della pagina</div>
    
</body>
</html>

<?php
/**
 * receives a strins and prints a div containing the string
 * @param string $text
 *  @param string $class
 * @return void
 */
function printDiv(string $text, $class) {
    echo "<div class='$class'>$text</div>";
    echo ""
    }

?>