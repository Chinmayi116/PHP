<!DOCTYPE html>
<html>
<body>

<h2>Sum of Natural Numbers</h2>

<form method="post">
    Enter Limit:
    <input type="number" name="n"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum = $sum + $i;
    }

    echo "Sum = " . $sum;
}
?>

</body>
</html>
