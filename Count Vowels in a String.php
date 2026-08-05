<?php
$str = "Programming";
$count = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), array('a','e','i','o','u')))
        $count++;
}

echo "Number of Vowels = $count";
?>
