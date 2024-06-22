
<?php

$number=153;  
$total=0;  
$x=$number;  
while($x!=0)  
{  
$rem= $x % 10;  
$total= $total+$rem*$rem*$rem;  
$x= $x/10;  
}  
if($number==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  

?>