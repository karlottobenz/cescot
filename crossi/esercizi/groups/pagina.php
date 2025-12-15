<?php
    include('../../php/esercizi/lib/libreria.php')
?>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>
</head>
<link rel ="stylesheet" href =style.css>
<body>
    <div>
        <button id="primorosso">Primo rosso</button>
        <button id="secondorosso">Secondo rosso</button>
        <button id="tuttirosso">Tutti rosso</button>
        <br>
        <button id="primoblu">Primo blu</button>
        <button id="secondoblu">Secondo blu</button>
        <button id="tuttiblu">Tutti blu</button>
        <br>
    </div>
    <h2>Primo Gruppo</h2>
     <?php
        rand_div_primo();
    ?>

    <h2>Secondo Gruppo</h2>
     <?php
        rand_div_secondo();
    ?>
    
</body>
</html>