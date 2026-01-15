<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Regioni</h1>
        <?php
            require_once("../../../php/esercizi/lib/libreria.php");

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

            $query = 'SELECT regioni.regione, COUNT(*) AS numero_prenotazioni, ROUND(SUM(prenotazioni.importo),2) AS totale_importo, ROUND(SUM(prenotazioni.importo - prenotazioni.caparra), 2) AS totale_saldo
                      FROM regioni
                      INNER JOIN citta ON regioni.id_regione = citta.regione
                      INNER JOIN clienti ON citta.id_citta = clienti.citta
                      INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente
                      GROUP BY regioni.regione';

            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $clienteDivContent = 
                        "<h2>Nome regione: $row[regione]</h2>
                        <p>Regione di residenza: $row[regione]</p>
                        <p>Area geografica di residenza: $row[area_geografica]</p>
                        <p>Città di residenza: $row[citta]</p>";
                        printDiv($clienteDivContent, 'cliente');
            }
            ?>
    </body>
</html>