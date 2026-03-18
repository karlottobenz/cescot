<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Inserimento cliente</h1>
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

            $regioniQuery = "SELECT id_regione, regione FROM regioni ORDER BY regione";
            $regioniResult = $mysqli->query($regioniQuery);

        ?>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="cognome" placeholder="Cognome" required>

            <label for="regione">Seleziona regione:</label>

            <select name="regione" id="regione" required>
                <option value="">-- Tutte le regioni --</option>

                <?php
                    while ($reg = $regioniResult->fetch_assoc()) {
                        $selected = ($regioneSelezionata == $reg['id_regione']) ? "selected" : "";
                        echo "<option value='{$reg['id_regione']}' $selected>{$reg['regione']}</option>";
                    }
                ?>
            </select>
            <br><br>
            <input type="submit" value="Salva">
            <input type="reset" value="Annulla">
        </form>
        <?php
            if (isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['regione'])) {

                $nome = $mysqli->real_escape_string($_POST['nome']);
                $cognome = $mysqli->real_escape_string($_POST['cognome']);
                $regione = (int) $_POST['regione'];

                $query = "INSERT INTO clienti (nome, cognome, id_regione)
                        VALUES ('$nome', '$cognome', $regione)";

                if ($mysqli->query($query)) {
                    echo "<p>Cliente inserito con successo!</p>";
                } else {
                    echo "<p>Errore: " . $mysqli->error . "</p>";
                }
            }
        ?>
        <?php
            $query = 'ALTER TABLE clienti
                      INSERT INTO clienti';
        ?>
    </body>
</html>