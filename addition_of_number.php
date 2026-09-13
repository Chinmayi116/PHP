<!DOCTYPE html>
<html>
<body>

<h2>Addition of Two Numbers</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="a"><br><br>

    Enter Second Number:
    <input type="number" name="b"><br><br>

    <input type="submit" value="Add">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    echo "Sum = " . ($a + $b);
}
?>

</body>
</html>
