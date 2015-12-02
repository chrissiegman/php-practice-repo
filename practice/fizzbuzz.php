<?php

foreach(range(1, 100) as $number) {
    $string = "$number:";

    if ($number % 3 == 0) {
        $string .= " fizz";
    }

    if ($number % 5 == 0) {
        $string .= " buzz";
    }

    echo $string .= "<br>";
}

?>
