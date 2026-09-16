<!DOCTYPE html>
<html>
<body>

<h2>Area of Rectangle</h2>

<form method="post">
    Length:
    <input type="number" name="l"><br><br>

    Breadth:
    <input type="number" name="b"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $l = $_POST["l"];
    $b = $_POST["b"];

    echo "Area = " . ($l * $b);
}
?>

</body>
</html>
