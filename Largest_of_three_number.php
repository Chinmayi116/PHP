<?php
$a = 25;
$b = 18;
$c = 30;

if ($a >= $b && $a >= $c)
    echo "$a is largest";
elseif ($b >= $a && $b >= $c)
    echo "$b is largest";
else
    echo "$c is largest";
?>
