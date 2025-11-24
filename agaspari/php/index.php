<?php

    // Stringa
    echo "<h1>Hello, World!</h1>";
    echo '<h2 class="classe"> Tipi di Dato: </h2>';

    /*
    Dati booleani
    echo true;
    echo false; */

    /* Numeri */
    echo 10;
    echo "\n"; // A capo nel documento di output
    echo 1.15;

    /* Nomi delle variabili */
    $nome_variabile;
    $nomeVariabile;
    $nomevariabile;

    /* Array */
    $array_1 = [1, 2, 3, 4, 5];
    $array_2 = array(1, 2, 3, 4, 5);
    $array_3 = array(
        "nome"    => "Mario",
        "cognome" => "Rossi",
        "eta"     => 21
    );

    /*echo "<br>";
    print_r($array_3);
    echo "<br>";
    var_dump($array_3); */

    // Verifichiamo se Mario Rossi è maggiorenne
    echo "<br>";
    echo "<br>";
    if ($array_3["eta"] >= 18) {
        echo "L'utente è maggiorenne";
    } else {
        echo "L'utente è minorenne";
    }

    echo "<br>";
    if ($array_3["eta"] == "18") {  // Confronta stringa e numero
        echo "L'utente ha 18 anni";
    } else {
        echo "L'utente non ha 18 anni";
    }

    echo "<br>";
    if ($array_3["eta"] === "21") { // Confronta valore e tipo
        echo "L'utente è maggiorenne";
    } else {
        echo "L'utente è minorenne";
    }

    /** Operatori logici
     * 
     * AND -> and oppure &&
     * OR  -> or oppure ||
     * XOR -> xor
     * NOT -> !
     */
    echo "<br>";
    if(true and false):
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;

    echo "<br>";
    if(true or false):
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;

    $persona_1 =array(
        "nome"     => "Luca",
        "cognome"  => "Rossi",
        "telefono" => ""
    );

    $persona_2 =array(
        "nome"     => "Lorenza",
        "cognome"  => "Verdi"
    );

    if($persona_1["telefono"] != ""):
        echo "Tel: ";
        echo $persona_1["telefono"];
    endif;

    if(array_key_exists("telefono", $persona_2) && $persona_2["telefono"] != ""):
        echo "Tel: " . $persona_2["telefono"];
    endif;

    // Array di voti
    $voti = [6, 7, 7.5, 4, 9, 8];

    $somma = 0;
    $num_voti = 0;

    // Ciclo per fare la media dei voti

    for($i = 0; $i < count($voti); $i++){
        if($voti[$i] > 0 || $voti[$i] <= 10){
            $somma = $somma + $voti[$i];
            $num_voti++;
        }
    }
    echo "<br>"; echo "<br>";
    echo "La somma dei voti è: " . $somma; echo "<br>";
    echo "Il numero di voti è: " . $num_voti; echo "<br>";
    $media = $somma / $num_voti;
    echo "La media dei voti è: " . $media; echo "<br>";


    $numero = 45;
    $valori = [1, 3, 6, 87, 23, 5, 45, 17, 89, 12, 34];

    $trovato = false;
    while(!$trovato){
        if ($valori[$i] == $numero){
            $trovato = true;
        }
        $i++;
    }

    if($trovato){
        echo $numero . " è presente nell'array (" . $i . " iterazioni)";
    } else {
        echo $numero . " non è presente nell'array (" . $i . " iterazioni)";
    }

    /**
     * Operatori di incremento e decremento
     */
    $i = 1;
    echo $i++;  // Stampa e poi incrementa, i == 2
    echo ++$i;  // Incrementa e poi stampa, i == 3
    echo $i--;  // Stampa e poi decrementa, i == 2
    echo --$i;  // Decrementa e poi stampa, i == 1

?>