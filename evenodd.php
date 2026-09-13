<!DOCTYPE html>
<html>
<body>

<h2>Even or Odd</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    if ($num % 2 == 0) {
        echo "Even Number";
    } else {
        echo "Odd Number";
    }
}
?>

</body>
</html>
