<!DOCTYPE html>
<html>
<body>

<h2>Even or Odd</h2>

<form method="post">
    Enter number:
    <input type="number" name="num"><br><br>

    <input type="submit" name="check" value="Check">
</form>

<?php
if (isset($_POST['check'])) {
    $num = $_POST['num'];

    if ($num % 2 == 0)
        echo "<h3>$num is Even</h3>";
    else
        echo "<h3>$num is Odd</h3>";
}
?>

</body>
</html>
