<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "Welcome, " . $name;
}
?>

</body>
</html>
