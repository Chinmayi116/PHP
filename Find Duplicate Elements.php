<?php
$numbers = [10, 20, 10, 30, 20, 40];

$duplicates = array_unique(
    array_diff_assoc($numbers, array_unique($numbers))
);

echo "Duplicate elements:<br>";

foreach ($duplicates as $num) {
    echo $num . "<br>";
}
?>
