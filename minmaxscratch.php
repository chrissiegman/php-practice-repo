<?php

$numbers = array(3000, 2, 14, -20000, -123, 450000);

function minmax($array)
{
    $len = count($array);
    $minimum = $array[0];
    $maximum = $array[0];
    

    for($n = 1 ; $n < $len ; $n++) {
        if ($array[$n] < $minimum) {
            $minimum = $array[$n];
        }

        if ($array[$n] > $maximum) {
            $maximum = $array[$n];
        }
    }

    $minmax = array($minimum, $maximum);
    return $minmax;
}

echo "Minimum: " . minmax($numbers)[0] . "<br>";
echo "Maximum: " . minmax($numbers)[1];

?>
