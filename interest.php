<!DOCTYPE html>
<html>
<body>

<h2>Simple Interest</h2>

<form method="post">
    Principal:
    <input type="number" name="p"><br><br>

    Rate:
    <input type="number" name="r"><br><br>

    Time:
    <input type="number" name="t"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = $_POST["p"];
    $r = $_POST["r"];
    $t = $_POST["t"];

    $si = ($p * $r * $t) / 100;

    echo "Simple Interest = " . $si;
}
?>

</body>
</html>
