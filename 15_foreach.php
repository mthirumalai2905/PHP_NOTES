<?php
echo "Welcome to for each loops";
$arr = array("luffy", "nami", "ussop", "zoro", "sanji");
/*
for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo "<br>";
}
*/


foreach ($arr as  $value) {
    echo "$value <br>";
}



?>