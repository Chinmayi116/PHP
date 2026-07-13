<?php
$num = 17;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0)
        $count++;
}

if ($count == 2)
    echo "$num is Prime";
else
    echo "$num is Not Prime";
?>

<?php
$str = "madam";

if ($str == strrev($str))
    echo "Palindrome";
else
    echo "Not Palindrome";
?>
