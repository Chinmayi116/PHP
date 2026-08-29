<?php
$year = 2028;

if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0))
    echo "$year is a Leap Year";
else
    echo "$year is Not a Leap Year";
?>
