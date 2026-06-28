<?php
$str = "Hello World";
$count = 0;

for($i = 0; $i < strlen($str); $i++)
{
    $ch = strtolower($str[$i]);

    if($ch=='a' || $ch=='e' || $ch=='i' || $ch=='o' || $ch=='u')
        $count++;
}

echo "Number of Vowels = $count";
?>
