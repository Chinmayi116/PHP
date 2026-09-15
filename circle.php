<!DOCTYPE html>
<html>
<body>

<h2>Area of Circle</h2>

<form method="post">
    Enter Radius:
    <input type="number" name="r" step="any"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $r = $_POST["r"];
    $area = pi() * $r * $r;

    echo "Area = " . $area;
}
?>

</body>
</html>
