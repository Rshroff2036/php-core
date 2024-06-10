<?php

function duplicatearray($array)
{
 $uniquearrray = array_unique($array);

 echo implode(" ," ,$uniquearrray);

}

$array =array(1,2,3,5,5,6,7,3,2,6,) ;
duplicatearray($array) ;
?>
