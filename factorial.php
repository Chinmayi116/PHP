<!DOCTYPE html>
<html>
<body>

<h2>Factorial Program</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num">
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $fact = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }

    echo "Factorial = " . $fact;
}
?>

</body>
</html>
