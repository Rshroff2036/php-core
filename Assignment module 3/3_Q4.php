<?php

function Fibonacci($n) 
{
    $num1 = 0;
    $num2 = 1;

    echo $num1.", ".$num2;

    for ($i = 2; $i < $n; $i++)
    {
        $num3 = $num1 + $num2;
        echo ", " . $num3;
        $num1 = $num2;
        $num2 = $num3;
    }
}

$n = 10;
Fibonacci($n);
?>
