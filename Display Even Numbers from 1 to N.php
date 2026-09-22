<!DOCTYPE html>
<html>
<body>

<h2>Even Numbers</h2>

<form method="post">
    Enter Limit:
    <input type="number" name="n"><br><br>

    <input type="submit" value="Display">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];

    for ($i = 2; $i <= $n; $i += 2) {
        echo $i . "<br>";
    }
}
?>

</body>
</html>
