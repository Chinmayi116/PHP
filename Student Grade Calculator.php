<?php
$marks = 82;

if ($marks >= 90)
    $grade = "A+";
elseif ($marks >= 80)
    $grade = "A";
elseif ($marks >= 70)
    $grade = "B";
elseif ($marks >= 60)
    $grade = "C";
elseif ($marks >= 50)
    $grade = "D";
else
    $grade = "Fail";

echo "Marks = $marks<br>";
echo "Grade = $grade";
?>
