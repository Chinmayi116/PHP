<!DOCTYPE html>
<html>
<body>

<h2>Kilometer to Meter</h2>

<form method="post">
    Enter Kilometers:
    <input type="number" name="km" step="any"><br><br>

    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $km = $_POST["km"];

    $meter = $km * 1000;

    echo "Meters = " . $meter;
}
?>

</body>
</html>
