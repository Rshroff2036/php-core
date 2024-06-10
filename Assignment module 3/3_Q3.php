<?php

$num1 = 30;
$num2 = 20;
$num3 = 10;

// maximum number using ternary operator

$maximum = ($num1 > $num2) ? 
    (($num1 > $num3) ? $num1 : $num3) : 
    (($num2 > $num3) ? $num2 : $num3);

echo "The maximum number among $num1, $num2, and $num3 is: $maximum";
?>
