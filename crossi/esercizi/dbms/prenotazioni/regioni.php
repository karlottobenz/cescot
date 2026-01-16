<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Regioni</h1>
        <form method="GET">
            <label for="nomereg">Cerca regione:</label><br>
            <input type="text" id="regione" name="regione" placeholder="Inserisci regione"><br>
            <input type="submit" value="Cerca">
            <input type="reset" value="Annulla">
        </form>
        <?php
            require_once("../../../php/esercizi/lib/libreria.php");

            $regione_da_cercare = isset($_GET['regione']) ? $_GET['regione'];
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
            
            if ($_SERVER['REQUESTED_METHOD'] !== 'GET'){
                $nomereg = $_GET['nomereg'];
                while ($row = mysqli_fetch_assoc($result)) {
                    $regioneDivContent = 
                        "<h2>" . $row['regione'] . "</h2>
                        <p>Numero di prenotazioni: " . $row['numero_prenotazioni'] . "</p>
                        <p>Importo totale: " . $row['totale_importo'] . "€</p>
                        <p class='saldo'>Saldo totale: " . $row['totale_saldo'] . "€</p>";
                        printDiv($regioneDivContent, 'regione');
                }
            }
            elseif ($nomereg == $row['regione']) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $regioneDivContent = 
                        "<h2>" . $row['regione'] . "</h2>
                        <p>Numero di prenotazioni: " . $row['numero_prenotazioni'] . "</p>
                        <p>Importo totale: " . $row['totale_importo'] . "€</p>
                        <p class='saldo'>Saldo totale: " . $row['totale_saldo'] . "€</p>";
                        printDiv($regioneDivContent, 'regione');
                }
            }
        ?>
    </body>
</html>