<?php

$n1 = 1234;
$n2 = 12;

function divide($a, $b) {
    return array(floor($a / $b), ($a % $b));
}

echo "QUOTIENT: " . divide($n1, $n2)[0] . "<br>";
echo "REMAINDER: " . divide($n1, $n2)[1] . "<br>";
?>
