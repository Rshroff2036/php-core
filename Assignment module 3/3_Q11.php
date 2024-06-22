<?php
// Indexed Array - Indexed arrays use numeric indexes. 
$indexedArray = [1, 2, 3, 4, 5];
echo $indexedArray[0]."<br>"; 

// Associative Array - Associative arrays use named keys.
$associativeArray = ["first" => 1, "second" => 2, "third" => 3];
echo $associativeArray["second"]."<br>"; 

// Multidimensional Array - Multidimensional arrays contain other arrays as elements
$multiArray = ["numbers" => [1, 2, 3],"letters" => ["A", "B", "C"]];
echo $multiArray["letters"][1]."<br>";

// Mixed Array - Arrays in PHP can hold mixed types of values, including integers, strings, and even other arrays.
$mixedArray = [1, "two", 3.0, ["four", 5]];
echo $mixedArray[3][0]."<br>"; 

?>
