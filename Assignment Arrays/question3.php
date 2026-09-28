<!DOCTYPE html>
<html>
<head>
    <title>Question 3</title>
</head>
<body>

<?php

$array = [

    "CA221" => [
        "Name" => "asma ibraahim abouker",
        "Phone" => "0648440403",
        "Address" => "Taleex, Hodan"
    ],

    "CA223" => [
        "Name" => "Hani ibraahim abouker",
        "Phone" => "0617223201",
        "Address" => "Taleex, Hodan"
    ],

    "CA221" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0616990276",
        "Address" => "weydow, Garsbaley"
    ]

];


echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
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