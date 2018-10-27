<?php
function icon($text) {
    // replace "coins" with a coin image
    if (strpos($text, ' coins') !== false) {
        echo str_replace(' coins', '<img src="assets/img/icon/coin.png" alt="Pokécoins" title="Pokécoins" class="icon">', $text);
    } 
    // replace "uncommon chest"
    elseif (strpos($text, ' uncommon chest') !== false) {
        if (strpos($text, ' uncommon chests') !== false) { // = "singular or plural?"
            echo str_replace(' uncommon chests', '<img src="assets/img/icon/uchest.png" alt="Uncommon chests" title="Uncommon chests" class="icon">', $text);
        } else {
            echo str_replace(' uncommon chest', '<img src="assets/img/icon/uchest.png" alt="Uncommon chest" title="Uncommon chest" class="icon">', $text);
        }
        
    }
    // replace "event tickets"
    elseif (strpos($text, ' event tickets') !== false) {
        echo str_replace(' event tickets', '<img src="assets/img/icon/ticket.png" alt="Event tickets icon" title="Event tickets" class="icon">', $text);
    }
    // replace "rare holo chest"
    elseif (strpos($text, ' rare holo chest') !== false) {
        echo str_replace(' rare holo chest', '<img src="assets/img/icon/rchest.png" alt="Rare holo chest icon" title="Rare holo chest" class="icon">', $text);
    }
    else {
        echo $text;
    }
}
?>