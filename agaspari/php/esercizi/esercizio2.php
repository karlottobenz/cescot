<?php
    /**
     * Esercizio 1
     * Dato un insieme di valorim trovare il numero più alto
     */

    $valori = [1, 3, 5, 2, 5, 3, 9, 4, 7];

    $piu_alto = 0;

    for($i = 0; $i<(count($valori)); $i++){
        if($valori[$i] > $piu_alto){
            $piu_alto = $valori[$i];
        }
    }

    echo "Il valore più alto è: " . $piu_alto;
?>

<?php
    /**
     * Esercizio 2
     * Stampa tutti gli elementi finché l'elemento corrente
     *  è inferiore a 15
     */

    $valori = [1, 3, 5, 12, 5, 8, 97, 14, 7];

    echo "<br>"; echo "<br>";
    for($i = 0; $i<(count($valori)); $i++){
        if($valori[$i] < 15){
            echo $valori[$i]; echo "<br>";
        } else {
            break;
        }
    }
?>

<?php
    /**
     * Esercizio 3
     * Stampa il nome di tutte le persone maggiorenni
     * Calcola l'età media di tutte le persone
     */

    echo"<br>";
    $persone = [
        array(
            "nome" => "Mario",
            "eta" => 19
        ),
        array(
            "nome" => "Lucia",
            "eta" => 14
        ),
        array(
            "nome" => "Rosa",
            "eta" => 21
        ),
        array(
            "nome" => "Francesco",
            "eta" => 24
        ),
        array(
            "nome" => "Giuseppe",
            "eta" => 16
        ),
        array(
            "nome" => "Marta",
            "eta" => 22
        )
    ];

    $somma = 0;
    /*
    for ($i = 0; $i < (count($persone)); $i++){
        if($persone[$i]["eta"] >= 18){
            echo $persone[$i]["nome"]; echo"<br>";
        }
        $somma += $persone[$i]["eta"];
    } */

        foreach ($persone as $persona){
            if($persona["eta"] >= 18){
                echo "<li>" . $persona["nome"] . "</li>";
            }
            $somma += $persona["eta"];
        }

    $media = $somma / (count($persone));
    echo"<br>";
    echo $media;
?>

<?php
    $settimana = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];

    for($i = 0; $i < count($settimana); $i++){
        switch($settimana[$i]):
            case "monday":
                echo "Lunedì";
                break;
            case "tuesday":
                echo "Martedì";
                break;
            case "wednesday":
                echo "Mercoledì";
                break;
            case "thursday":
                echo "Giovedì";
                break;
            case "friday":
                echo "Venerdì";
                break;
            case "saturday":
                echo "Sabato";
                break;
            case "sunday":
                echo "Domenica";
                break;
        endswitch;
    }

    // Sunday, 3 August 2025
    function formatta_data($data){
        $parti = explode(" ", $data);
        $giorno = traduci_giorno($parti[0]);
        $giorno_del_mese = $parti[1];
        $mese = traduci_mese($parti[2]);
        $anno = $parti[3];

        return $giorno . " " . $giorno_del_mese . " " . $mese . " " . $anno;
    }

    echo "<br>";
    echo formatta_data("Monday 14 September 2025");

    function traduci_giorno($giorno){
        switch(strtolower($giorno)):
            case "monday":
                return "Lunedì";
            case "tuesday":
                return "Martedì";
            case "wednesday":
                return "Mercoledì";
            case "thursday":
                return "Giovedì";
            case "friday":
                return "Venerdì";
            case "saturday":
                return "Sabato";
            case "sunday":
                return "Domenica";
            default:
                return false;
        endswitch;
    }

    function traduci_mese($mese){
        switch(strtolower($mese)):
            case "january":
                return "Gennaio";
            case "february":
                return "Febbraio";
            case "march":
                return "Marzo";
            case "april":
                return "Aprile";
            case "may":
                return "Maggio";
            case "june":
                return "Giugno";
            case "july":
                return "Luglio";
            case "august":
                return "Agosto";
            case "september":
                return "Settembre";
            case "october":
                return "Ottobre";
            case "november":
                return "Novembre";
            case "december":
                return "Dicembre";
            default:
                return false;
        endswitch;
    }
?>

<?php
    /**
     * Esercizio 4 
     * Data l'età di una persona, ritorna se può guidare il 125
     * @param int
     * @return bool
     */

    function guidare_125($eta){
        if($eta >= 16){
            return true;
        } 
        return false;
    }
    echo "<br>";
    echo guidare_125(115);


    /**
     * Esercizio 5
     * Dato un numero, verifica se è divisibile per 3
     */

    function div_per_tre($n){
        if($n%3 == 0){
            return true;
        }
        return false;
    }

    echo "<br>";
    echo div_per_tre(5);

    /**Esercizio 6
     * Dato un numero, ritornarlo in formato Euro
     */

    function ritorna_euro($eu){
        return "€" . number_format($eu, 2, ".", "");
    }

    echo ritorna_euro(1936.27);
?>