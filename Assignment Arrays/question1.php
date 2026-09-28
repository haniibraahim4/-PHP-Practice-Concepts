<!DOCTYPE html>
<html>
<head>
    <title>Question 1</title>
</head>
<body>

<?php

$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];


// 2. Print all elements
echo "All elements: ";

foreach ($array as $allelement) {
    echo $allelement . " ";
}

echo "<br>";


// 3. Total of all elements
$total = 0;

foreach ($array as $allelement) {
    $total = $total + $allelement;
}

echo "Total = " . $total . "<br>";


// 4. Total of even elements
$evenTotal = 0;

foreach ($array as $allelement) {

    if ($allelement % 2 == 0) {
        $evenTotal = $evenTotal + $allelement;
    }
}

echo "Total of even elements = " . $evenTotal . "<br>";


// 5. Total of odd elements
$oddTotal = 0;

foreach ($array as $allelement) {

    if ($allelement % 2 != 0) {
        $oddTotal = $oddTotal + $allelement;
    }
}

echo "Total of odd elements = " . $oddTotal . "<br>";


// 6. Minimum element and positions
$min = min($array);

echo "Minimum = " . $min . "<br>";
echo "Minimum positions: ";

foreach ($array as $index => $allelement) {

    if ($allelement == $min) {
        echo $index . " ";
    }
}

echo "<br>";


// 7. Maximum element and positions
$max = max($array);

echo "Maximum = " . $max . "<br>";
echo "Maximum positions: ";

foreach ($array as $index => $allelement) {

    if ($allelement == $max) {
        echo $index . " ";
    }
}

?>

</body>
</html>