<?php
$num = 13;
$flag = true;

for($i=2; $i<$num; $i++)
{
    if($num % $i == 0)
    {
        $flag = false;
        break;
    }
}

if($flag)
    echo "$num is Prime";
else
    echo "$num is Not Prime";
?>
