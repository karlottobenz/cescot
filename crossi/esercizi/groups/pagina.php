<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel ="stylesheet" href =style.css>
<body>
    <div>
        <button id="bottonerosso">Rosso</button> <br>
        <button id="bottoneblu">Blu</button> <br>
    </div>
     <?php
    for ($i = 1; $i <= 15; $i++){
        echo("<div>Questo è il div numero $i</div>");
    }
    ?>
    
</body>
</html>