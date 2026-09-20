                         🟢 PHP Week 1 — Concepts



                                1. PHP Syntax

<?php
echo "Hello World";
?>   


                                2. Comments
1_)Single-line comment

<?php

// This is a comment
echo "Hello";

?>
                        2). Single-line comment — #
<?php

# This is a comment
echo "Hello";

?>



                        3). Multi-line comment — /* */
<?php

/*
This is a comment
This is another line
This is another line
*/

echo "Hello";

?>

                             3. Variables

$name = "Hani";
$age = 20;

echo $name;
echo $age;   

                            4. Strings

$name = "Hani Ibrahim";

echo $name;

                         5. String Functions

$text = "Hello PHP";

echo strlen($text);
echo str_word_count($text);



                         6. Numbers

$a = 10;
$b = 5;

echo $a + $b;


echo       vs      	        print
Displays output	            Displays output
Can output multiple values  	Outputs one value
Does not return a value	      Returns 1
Slightly more commonly used     	Less commonly used


                     Easy example
<?php

$name = "Hani";

echo "My name is ", $name;

print "My name is $name";

?>
                       🧠 Easy way to remember

echo = display

print = display + returns 1
