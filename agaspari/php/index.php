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

    echo "<br>";
    print_r($array_3);
    echo "<br>";
    var_dump($array_3);

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
?>