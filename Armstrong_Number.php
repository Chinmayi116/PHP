<?php
$num = 153;
$sum = 0;
$temp = $num;

while($temp > 0)
{
    $rem = $temp % 10;
    $sum += $rem * $rem * $rem;
    $temp = (int)($temp / 10);
}

if($sum == $num)
    echo "Armstrong Number";
else
    echo "Not Armstrong Number";
?>
