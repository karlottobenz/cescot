<html>
    <head>
        <meta charset="utf-8">
        <link ref="stylesheet" href="style.css">
    </head>
    <body>
        <h1>clienti</h1>
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

            $query = 'SELECT citta.citta, clienti.nome, clienti.cognome, prenotazioni.arrivo, prenotazioni.importo, prenotazioni.caparra,  ROUND(prenotazioni.importo - prenotazioni.caparra, 2) AS saldo
                      FROM citta
                      INNER JOIN clienti ON citta.id_citta = clienti.citta
                      INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente';

            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $clienteDivContent = 
                        "<h2>Nome: $row[nome] Cognome: $row[cognome]</h2>
                        <p>Regione di residenza: $row[regione]</p>
                        <p>Area geografica di residenza: $row[Area geografica]</p>
                        <p>Città di residenza: $row[città]</p>";
                        printDiv($clienteDivContent, 'cliente');
            }
            ?>
    </body>
</html>