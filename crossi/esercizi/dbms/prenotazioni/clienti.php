<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Clienti</h1>

        <?php
        require_once("../../../php/esercizi/lib/libreria.php");

        $mysqli = new mysqli(
            getenv("DB_HOST"),
            getenv("DB_USER"),
            getenv("DB_PASS"),
            getenv("DB_NAME")
        );

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Recupero regioni per popolare la select
        $regioniQuery = "SELECT id_regione, regione FROM regioni ORDER BY regione";
        $regioniResult = $mysqli->query($regioniQuery);

        // Regione selezionata dall’utente
        $regioneSelezionata = isset($_GET['regione']) ? $_GET['regione'] : "";

        // Parametri paginazione
        $limit = 50;
        $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
        ?>

        <!-- FORM DI SELEZIONE REGIONE -->
        <form method="GET">
            <label for="regione">Seleziona regione:</label><br>

            <select name="regione" id="regione">
                <option value="">-- Tutte le regioni --</option>

                <?php
                while ($reg = $regioniResult->fetch_assoc()) {
                    $selected = ($regioneSelezionata == $reg['id_regione']) ? "selected" : "";
                    echo "<option value='{$reg['id_regione']}' $selected>{$reg['regione']}</option>";
                }
                ?>
            </select>

            <br><br>
            <input type="submit" value="Cerca">
            <input type="reset" value="Annulla">
        </form>

        <hr>

        <?php
        // Query base
        $query = 'SELECT clienti.nome, clienti.cognome, regioni.regione, regioni.area_geografica, citta.citta
                  FROM clienti
                  INNER JOIN citta ON clienti.citta = citta.id_citta
                  INNER JOIN regioni ON citta.regione = regioni.id_regione';

        // Se l’utente ha selezionato una regione, aggiungo il filtro
        if ($regioneSelezionata !== "") {
            $query .= " WHERE regioni.id_regione = ?";
            $query .= " LIMIT ? OFFSET ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("iii", $regioneSelezionata, $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
        } else {
            $query .= " LIMIT $limit OFFSET $offset";
            $result = $mysqli->query($query);
        }

        // Stampa risultati
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $clienteDivContent = 
                    "<h2>Nome: {$row['nome']} Cognome: {$row['cognome']}</h2>
                    <p>Regione di residenza: {$row['regione']}</p>
                    <p>Area geografica di residenza: {$row['area_geografica']}</p>
                    <p>Città di residenza: {$row['citta']}</p>";

                printDiv($clienteDivContent, 'cliente');
            }
        } else {
            echo "<p>Nessun cliente trovato.</p>";
        }

        // Link paginazione
        echo "<hr>";

        $prevOffset = max(0, $offset - $limit);
        $nextOffset = $offset + $limit;

        $baseUrl = "?regione=$regioneSelezionata";

        echo "<a href='$baseUrl&offset=$prevOffset'>Prima</a> | ";
        echo "<a href='$baseUrl&offset=$nextOffset'>Dopo</a>";
        ?>

    </body>
</html>
