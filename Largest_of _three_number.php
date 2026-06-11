<?php
$a = 10;
$b = 25;
$c = 15;

if($a >= $b && $a >= $c)
    echo "$a is largest";
elseif($b >= $a && $b >= $c)
    echo "$b is largest";
else
    echo "$c is largest";
?>
