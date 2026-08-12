<!DOCTYPE html>
<html>
<body>

<h2>Addition of Two Numbers</h2>

<form method="post">
    Enter first number:
    <input type="number" name="num1"><br><br>

    Enter second number:
    <input type="number" name="num2"><br><br>

    <input type="submit" name="add" value="Add">
</form>

<?php
if (isset($_POST['add'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $sum = $a + $b;

    echo "<h3>Sum = $sum</h3>";
}
?>

</body>
</html>
