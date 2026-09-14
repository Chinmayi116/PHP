<!DOCTYPE html>
<html>
<body>

<h2>Largest of Three Numbers</h2>

<form method="post">
    Number 1: <input type="number" name="a"><br><br>
    Number 2: <input type="number" name="b"><br><br>
    Number 3: <input type="number" name="c"><br><br>
    <input type="submit" value="Find Largest">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    echo "Largest = " . max($a, $b, $c);
}
?>

</body>
</html>
