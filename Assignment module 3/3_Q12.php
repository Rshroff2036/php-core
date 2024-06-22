<?php
$string = "one,two,three,four";
$array = explode(",", $string);

foreach ($array as $element) 
{
    echo $element . "<br>"; 
}
?>
