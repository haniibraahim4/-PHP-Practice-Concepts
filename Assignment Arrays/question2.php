<!DOCTYPE html>
<html>
<head>
    <title>Question 2</title>
</head>
<body>

<?php

$array = [

    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]

];


echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";


foreach ($array as $rowName => $columns) {

    echo "<tr>";

    echo "<th>" . $rowName . "</th>";

    foreach ($columns as $value) {

        echo "<td>" . $value . "</td>";

    }

    echo "</tr>";
}


echo "</table>";

?>

</body>
</html>