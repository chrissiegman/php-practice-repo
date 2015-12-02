<?php

$string = "What a beautiful day";
$word_array = explode(' ', $string);
$reversed = array_reverse($word_array);

foreach($reversed as $word) {
    echo $word . " ";
}
?>
