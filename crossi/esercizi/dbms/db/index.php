<html>
    <h1>Il testo che segue arriva dal database</h1>
    <div>
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
            $query = 'SELECT * FROM content';

            $result = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['value'].'<br>';
            }
        ?>
    </div>
</html>