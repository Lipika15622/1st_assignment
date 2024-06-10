<?php

function sum($value)
{ 
    if($value<0)
    {
        $value = -1 * $value;
    }
    $sum = 0;
    while($value > 0)
    {
        $sum += $value % 10;
        $value = (int)($value / 10);
    }
    return $sum;
}
$value = readline("Enter the Integer: ");
echo "Summation of Given Integer: " .sum($value);
?>
