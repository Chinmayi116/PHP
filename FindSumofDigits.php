<!DOCTYPE html>
<html>
<body>

<h2>Sum of Digits</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $sum = $sum + $digit;
        $num = (int)($num / 10);
    }

    echo "Sum of Digits = " . $sum;
}
?>

</body>
</html>
