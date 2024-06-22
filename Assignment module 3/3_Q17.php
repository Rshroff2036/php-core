<?php
$balances = [
    [100.50, 100.75, 100.25, 100.00, 100.90],
    [150.30, 250.60, 350.80, 250.20, 250.10],
    [110.15, 210.55, 310.35, 410.85, 510.45]
];

for ($i = 0; $i < count($balances); $i++) 
{
    for ($j = 0; $j < count($balances[$i]); $j++) 
    {
        echo "balances[$i][$j] = " . $balances[$i][$j] . "<br>";
    }
    echo "<br>";
}
?>
