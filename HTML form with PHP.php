<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "<h3>Hello, $name!</h3>";
}
?>

</body>
</html>
