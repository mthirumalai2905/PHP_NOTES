<?php

echo "Welcome to php tutorial on functions";
echo "<br>";

function processMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach($marksArr as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}


$rohan = [34, 98, 93, 12, 45, 93];
$sumMarks = processMarks($rohan);
echo "Total marks scored by rohan out of 600 is  $sumMarks";


echo"<br>";

$thiru = [99, 98, 93, 94, 17, 100];
$sumMarksthiru = processMarks($thiru);
echo "Total marks scored by thiru out of 600 is  $sumMarksthiru";



?>