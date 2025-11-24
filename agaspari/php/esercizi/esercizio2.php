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