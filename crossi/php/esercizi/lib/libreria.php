<?php
/**
 * receives a strins and prints a div containing the string
 * @param string $text
 *  @param string $class
 * @return void
 */
function printDiv(string $text, $class) {
    echo "<div class='$class'>$text</div>";
    echo "";
}

/**
 * Stampa un numero casuale (fra 5 e 10) di div
 */

function rand_div_primo(){
    for ($i = 1; $i <= RAND(5,10); $i++){
        echo "<div class='primo_gruppo'>Div $i</div>";
    }
}

/**
 * Stampa un numero casuale (fra 10 e 15) di div
 */
function rand_div_secondo(){
    for ($i = 1; $i <= RAND(10,15); $i++){
        echo "<div class='secondo_gruppo'>Div $i</div>";
    }
}

?>