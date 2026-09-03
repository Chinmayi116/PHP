<?php
$a = 20;
$b = 5;
$op = '+';

switch ($op) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        echo $a / $b;
        break;
    default:
        echo "Invalid Operator";
}
?>
