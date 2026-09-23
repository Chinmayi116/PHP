<!DOCTYPE html>
<html>
<body>

<h2>Rupee to Dollar Converter</h2>

<form method="post">
    Enter Rupees:
    <input type="number" name="rupees" step="any"><br><br>

    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rupees = $_POST["rupees"];
    $dollar = $rupees / 90;

    echo "Dollar = $" . round($dollar, 2);
}
?>

</body>
</html>
