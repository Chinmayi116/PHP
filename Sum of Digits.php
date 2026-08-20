<?php
$num = 12345;
$sum = 0;

while ($num > 0) {
    $digit = $num % 10;
    $sum += $digit;
    $num = (int)($num / 10);
}

echo "Sum of digits = $sum";
?>
