<?php
$arr = [10, 50, 20, 80, 30];

$largest = $arr[0];

foreach ($arr as $value) {
    if ($value > $largest) {
        $largest = $value;
    }
}

echo "Largest = " . $largest;
?>
