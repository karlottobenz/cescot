<?php
    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    echo "Es 01"; echo "<br>";
    $a = 67;
    $b = 104;

    echo "Somma = "; echo $a+$b;
    echo "<br>";
    echo "Differenza = "; echo $a-$b;
    echo "<br>";
    echo "Moltiplicazione = "; echo $a*$b;
    echo "<br>";
    echo "Divisione = "; echo $a/$b;

    echo "<br>";
    echo "<br>";
    echo "Es 02"; echo "<br>";
     /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */

    $parola = "albero";

    if($parola == "casa") {
        echo "La parola è \"Casa\"";
    } else {
        echo "La parola non è \"Casa\"";
    }
    echo "<br>";
    echo "<br>";
    echo "Es 03"; echo "<br>";
    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */

    $c = 12;
    $d = 21;

    if ($c == $d){
        echo "I due numeri sono uguali";
    } else {
        echo "I due numeri sono diversi";
    }

    /**
     * Es 04
     * Converti il voto in un giudizio
     * - Da 0 a 5  -> Insufficiente
     * - 6         -> Sufficiente
     * - 7 o 8     -> Buono
     * - 9         -> Ottimo
     * - 10        -> Eccellente
     */
    echo "<br>";
    echo "<br>";
    echo "Es 04"; echo "<br>";

    $voto = -1;

    if($voto >= 0 && $voto <= 5):
        echo "Insufficiente";
    elseif($voto == 6):
        echo "Sufficiente";
    elseif($voto == 7 || $voto == 8):
        echo "Buono";
    elseif($voto == 9):
        echo "Ottimo";
    elseif($voto == 10):
        echo "Eccellente";
    else:
        echo "Il voto non è valido";
    endif;
?>