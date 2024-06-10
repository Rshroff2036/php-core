<?php
function isEvenOrOdd($num)
{

    $check = ["Even", "Odd"];

    echo $check[$num % 2];
}
echo  isEvenOrOdd(5);
?>
