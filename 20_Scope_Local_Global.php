<?php

echo "Welcome to the scope and local/global variable in PHP <br>";

$a = 98;
$b = 5; // Global Variable

function printValue() {
    global $a, $b; // Give me access to these global variables
    $a = 100;
    $b = 100000; // Change the value of $b to 100000
    echo "The value of your variable is a is $a and b is $b ";
    echo "<br>";
}

echo "<br>";
echo "The value of your variable is a is $a and b is $b";
printValue();
echo "<br>";

echo var_dump($GLOBALS['a']);
echo var_dump($GLOBALS['b']);

?>
