<!DOCTYPE html>
<html>
<body>

<h2>Armstrong Number</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = (int)$_POST["num"];
    $temp = $num;
    $sum = 0;
    $digits = strlen((string)abs($num));

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }

    if ($num >= 0 && $sum == $num) {
        echo "Armstrong Number";
    } else {
        echo "Not an Armstrong Number";
    }
}
?>

</body>
</html>
