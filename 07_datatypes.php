<?php
$name = "Thiru";
$income = 200;

/* php data types
1. string
2. Integer
3. FLoat
4. Boolean
5. Object
6. Array
7. NULL
 */


// String - sequence of characters
$name = "Harry";
$friend = "Thiru";
echo "$name ka friend is $friend";
echo "<br>";


//Integer - Non decimal Number
$income = 455;
$debt = -655;
echo $income;
echo $debt;
echo "<br>";

//Float - decimal point number
$income = 344.5;
$debt = -45.5;
echo $income;
echo $debt;

//Boolean - Can either be true or false
$x = true;
$y = false;
echo var_dump($x);
echo var_dump($y);
echo " <br>";

//Object - Instances of classes
//Employee is a Class --> Thiru can be object

//Array - Used to store multi values in a single variable 
$friends = array("rohan", "thiru", "gill", "luffy");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];


//NULL
echo"<br>";
$name = NULL;
echo var_dump($name);
?>