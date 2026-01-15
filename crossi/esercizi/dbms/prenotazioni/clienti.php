<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Clienti</h1>
        <?php
            require_once("../../../php/esercizi/lib/libreria.php");
            /*inizializza la connessione al database
            $databaseHost = '127.0.0.1';
            $databaseName = 'prenotazioni';
            $databaseUsername = 'root';
            $databasePassword = '';
            $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); */

            $mysqli = new mysqli(
                getenv("DB_HOST"),
                getenv("DB_USER"),
                getenv("DB_PASS"),
                getenv("DB_NAME")
            );

            //verifica la connessione
            if (!$mysqli) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = 'SELECT clienti.nome, clienti.cognome, regioni.regione, regioni.area_geografica, citta.citta
                      FROM clienti
                      INNER JOIN citta ON clienti.citta = citta.id_citta
                      INNER JOIN regioni ON citta.regione = regioni.id_regione';

            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $clienteDivContent = 
                        "<h2>Nome: $row[nome] Cognome: $row[cognome]</h2>
                        <p>Regione di residenza: $row[regione]</p>
                        <p>Area geografica di residenza: $row[area_geografica]</p>
                        <p>Città di residenza: $row[citta]</p>";
                        printDiv($clienteDivContent, 'cliente');
            }
            ?>
    </body>
</html>