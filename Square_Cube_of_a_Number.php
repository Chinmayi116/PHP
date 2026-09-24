<!DOCTYPE html>
<html>
<body>

<h2>Square and Cube</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    echo "Square = " . ($num * $num) . "<br>";
    echo "Cube = " . ($num * $num * $num);
}
?>

</body>
</html>
