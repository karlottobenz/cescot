<html>
    <head>
        <title>Esercizio</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <h1>Clienti</h1>
        <?php
            //inizializza la connessione al database
            $databaseHost = '127.0.0.1';
            $databaseName = 'cescot';
            $databaseUsername = 'root';
            $databasePassword = '';
            $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

            //verifica la connessione
            if (!$mysqli) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //esegui una query di esempio
            $query = 'SELECT * FROM clienti';

            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class = 'cliente'>
                        <h2>$row[id]</h2>
                        <p>$row[nome] $row[cognome]</p> </div>";
            }
        ?>
</html>