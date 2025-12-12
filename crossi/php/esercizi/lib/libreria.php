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

?>