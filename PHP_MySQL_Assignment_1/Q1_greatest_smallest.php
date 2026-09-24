<?php

$a = 20;
$b = 10;
$c = 30;

if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Greatest number is: " . $greatest . "<br>";
echo "Smallest number is: " . $smallest;

?>