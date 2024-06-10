<?php

function LeapYear($year) 
{
    if ($year % 4 == 0) 
    {
        if ($year % 100 == 0) 
        {
            if ($year % 400 == 0) 
            {
                return true; //400 se divide hua to 

            } else
            {
                return false; //100 se hua divide but 400 se nhi hua
            }
        } else 
            {
            return true; // 4 se divide hua but 100 se nhi hua
            }
    } else {
        return false; //4 se nhi hua divide
    }
}

// years 1901 to 2016
echo "Leap years between 1901 and 2016:<br>";
for ($year = 1901; $year <= 2016; $year++) {
    if (LeapYear($year)) 
    {
        echo "$year<br>";
    }
}
?>
