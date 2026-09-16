<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>

</body>
</html>
