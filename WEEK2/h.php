<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php


// $age=20;
// if($age>=18)
//     echo "Adult";
// else
//     echo "child";



// $marks = 90;
// switch($marks){
//     case 90:
//         echo "A+";
//         break;
//     case 80:
//         echo "A";
//         break;
//     case 70:
//         echo "B+";
//         break;
//     case 60:
//         echo "B";
//         break;
//     case 50:
//         echo "C+";
//         break;
//     case 40:
//         echo "C";
//         break;
//     default:
//         echo "Fail";
// }


$count = 1;

while($count <= 5){
    echo "The count is: $count <br>";
    $count++;
}
    





$x = 1;

do {
    echo "The count is: $x <br>";
    $x++;
} while ($x <= 5);


for($count=1; $count<=12; $count++){
    echo "the count is:.".($count*12).".<br>";
    
}

for($i=1; $i<=3; $i++){
    for($j=1; $j<=5; $j++){
        echo "$i * $j = ".$i*$j."<br>";
    }
    echo "<br>";
}
for($row=1; $row<=20; $row++){
    for($col=1; $col<=1; $col++){
        echo  "is result: ". "$row * $col = ".$row*$col."<br>";
    }
    echo "<br>";
}
   ?>

</body>
</html>