<!DOCTYPE html>
<html>
<head>
    <title>Addition Program</title>
</head>
<body>

<h2>Addition of Two Numbers</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1"><br><br>

    Enter Second Number:
    <input type="number" name="num2"><br><br>

    <input type="submit" name="add" value="Add">
</form>

<?php
if(isset($_POST['add']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;

    echo "<h3>Result: $sum</h3>";
}
?>

</body>
</html>
