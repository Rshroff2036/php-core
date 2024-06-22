<?php

$array = ["JISHAN", "ALAP", "SMITA", "RAHUL", "PRASHANT", "REKHA", "ARUNA"];
$randomKeys = array_rand($array, 3);


echo "Random name: <br>";

foreach ($randomKeys as $key) 
{
    echo $array[$key] . "<br>";
}
?>
