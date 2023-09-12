<?php


echo "Welcome to the page of Associative Arrays in php";
echo"<br>";


$arr = array("Luffy", "nami", "zoro", "ussop", "sanji");
echo $arr[0];
echo"<br>";
echo $arr[1];
echo"<br>";
echo $arr[2];
echo"<br>";
echo $arr[3];
echo"<br>";
echo $arr[4];
echo"<br>";

$favCol = array('shubham' => 'red', 
                'gajanan' => 'blue', 
                'luffy' =>'green');



                foreach ($favCol as $key => $value) {
                    echo "Favourite color of $key is $value <br>";
                }

?>