<!DOCTYPE html>
<html>
<body>

<h2>BMI Calculator</h2>

<form method="post">
    Weight (kg):
    <input type="number" name="weight" step="any"><br><br>

    Height (m):
    <input type="number" name="height" step="any"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    $bmi = $weight / ($height * $height);

    echo "BMI = " . round($bmi, 2);
}
?>

</body>
</html>
