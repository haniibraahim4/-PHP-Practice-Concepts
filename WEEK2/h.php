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


// $count = 1;

// while($count <= 5){
//     echo "The count is: $count <br>";
//     $count++;
// }
    





// $x = 1;

// do {
//     echo "The count is: $x <br>";
//     $x++;
// } while ($x <= 5);


// for($count=1; $count<=12; $count++){
//     echo "the count is:.".($count*12).".<br>";
    
// }

// for($i=1; $i<=3; $i++){
//     for($j=1; $j<=5; $j++){
//         echo "$i * $j = ".$i*$j."<br>";
//     }
//     echo "<br>";
// }
// for($row=1; $row<=20; $row++){
//     for($col=1; $col<=1; $col++){
//         echo  "is result: ". "$row * $col = ".$row*$col."<br>";
//     }
//     echo "<br>";
// }


// // indexded

// $gender=["male","female","other"];
// echo "the gender is : $gender[2] <br>";

// $subjects=[
//     "maths"=>90,
//     "physics"=>80,
// ];
// echo "the marks of maths is:" . $subjects["maths"] . "<br>";
// echo "the marks of physics is:" . $subjects["physics"] . "<br>";


// $name=[
//     "firstname"=>"hani",
//     "lastname"=>"Ibrahhim",
//     "Gander"=> "female"

// ];
// $name2=
// [
//     "firstname"=>"Asma",
//     "lastname"=>"Ibrahim", 
//     "Gander"=> "female"
// ];
// echo"the name is: ".$name["firstname"]." ".$name["lastname"]." and the gender is: ".$name["Gander"]."<br>";
// echo"the name is :".$name2["firstname"]. " ".$name2["lastname"]."  ". "and the gender is: ".$name2["Gander"]."<br>";


// $n1=[
//     "f"=>"Ali",
//     "age"=>20,
//     "Gender"=>"Male"
// ];
// $n2=[
//     "f"=>"Hani",
//     "age"=>21,
//     "Gender"=>"feMale"
// ];
// $n3=[
//     "f"=>"Asma",
//     "age"=>22,
//     "Gender"=>"FeMale"
// ];
// echo $n1["f"]." "."____".$n1["age"]."  "."____".$n1["Gender"]."<br>";
// echo $n2["f"]." "."____".$n2["age"]."  "."____".$n2["Gender"]."<br>";
// echo $n3["f"]." "."____".$n3["age"]."  "."____".$n3["Gender"]."<br>";



// $student=[
//     "name"=>"hani",
//     "age"=>19,
//     "gender"=>"female"
// ];
// echo $student["name"]."____";
// echo $student["age"]."____";
// echo $student["gender"].":" ."<br>";

// $student1=[
//     "name"=>"Hani",
//     "age"=>20,
//     "Gender"=>"female"
// ];
// $student2=[
//     "name"=>"ASMA",
//     "age"=>25,
//     "Gender"=>"female"
// ];
// $student3=[
//     "name"=>"mohamed",
//     "age"=>26,
//     "Gender"=>"male"
// ];
// echo "  the name is :" .$student1["name"]."_____".$student1["age"]."______".$student1["Gender"]."<br>";
// echo "  the name is :" .$student2["name"]."_____".$student2["age"]."______".$student2["Gender"]."<br>";
// echo "  the name is :" .$student3["name"]."_____".$student3["age"]."______".$student3["Gender"]."<br>";


// $Student = [
//     "name" => "hani",
//     "age" => 21,
//     "gender" => "feMale"
// ];
// echo $Student ["name"]. $Student["age"]. $Student["gender"] ,"<br>";


// $student4 = [
//     "name" => "Asma",
//     "age" => 22,
//     "city"=>"Mogdisho"
// ];
// echo $student4["name"]."____".$student4["age"]."_____".$student4["city"]."<br>";








// $students = [
//     [
//         "name" => "Ali",
//         "age" => 20,
//          "gender" => "male"
//     ],
//     [
//         "name" => "Hani",
//         "age" => 21,
//          "gender" => "Female"
//     ],
//     [
//         "name" => "Asma",
//         "age" => 22,
//          "gender" => "Female"
//     ]
// ];fjjfu



// foreach($students as $student5){
//     echo  $student5  ["name"]."____". $student5["age"]."____". $student5 ["gender"]."<br>";
  

// }
// $students = [
//     [
//         "name" => "Ali",
//         "age" => 20
//     ],
//     [
//         "name" => "Hani",
//         "age" => 21
//     ],
//     [
//         "name" => "Asma",
//         "age" => 22
//     ]
// ];

// foreach($students as $s){
//     if($s["age"]==21)
        
//     echo $s ["name"]."   "."is ".$s["age"]."year old"."<br>";
// }

// $students1 = [
//     ["name" => "Ali", "mark" => 45],
//     ["name" => "Hani", "mark" => 75],
//     ["name" => "Asma", "mark" => 60]
// ];
// foreach($students1 as $ss){


  
  
//     if ($ss ["mark"]>=60){
    
//         echo"pass";
//     }

//     else{
//         echo "fail";
//     }
//     echo $ss ["name"]."=".$ss["mark"]."<br>";
// }

// $into = array("101", "hani ibraahim", "hodan district", "single");

// for($i = 0; $i < count($into); i.lengthdddd)
// {
//     echo $into[$i] . "<br>";
// }

$into = array(
    "id"=>"101",
    "name"=>"hani",
    "age"=>20,
    "address"=>"hodan District",
    "status"=>"singal",
    "weight"=>160.5
);
    echo "<pre>";
    echo"infrontion about the personal <br>";

    print_r($into);
    var_dump($into);
    echo "</pre>"





?>

</body>
</html>`