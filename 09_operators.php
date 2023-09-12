<?php

//Operators in PHP

/*
1.Arithmetic Operators
2.Assignment Operators
3.Comparison Operators
4.Logical Operators
*/

$a = 10;
$b = 5;


// Addition Operators
echo " Addition of a + b = " . ($a + $b);
echo "<br>";
echo " Subtraction of a - b = " . ($a - $b);
echo "<br>";
echo " Multiplication of a * b = " . ($a * $b);
echo "<br>";
echo " Division  of a / b = " . ($a / $b);
echo "<br>";


//Assignment Operators
$x = 0;
$x = $a;
echo "For x, the value is " . $a. "<br>";

$a += 6;
echo "For x, the value is " . $a . "<br>";

$a -= 6;
echo "For x, the value is " . $a . "<br>";

$a *= 6;
echo "For x, the value is " . $a . "<br>";

$a /= 6;
echo "For x, the value is " . $a . "<br>";


//Comparison Operators 
$x = 7;
$y = 10;

echo "For x >  y, the result is " ;
echo var_dump($x >  $y);
echo "<br>";

echo "For x < y, the result is " ;
echo var_dump($x <  $y);
echo "<br>";

echo "For x  <> y, the result is " ;
echo var_dump($x <> $y);
echo "<br>";


//Logical Operators 

$m = true;
$n = false;

echo "for m and n, the result is ";
echo var_dump($m and $n);  // &&
echo "<br>";


echo "for m or n, the result is ";
echo var_dump($m or $n); // ||
echo "<br>";



echo "for not of m, the result is ";
echo var_dump(!$m); // ||
echo "<br>";



?>