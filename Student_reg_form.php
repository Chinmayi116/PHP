<!DOCTYPE html>
<html>
<body>

<form method="post">
Name:
<input type="text" name="name"><br><br>

Age:
<input type="number" name="age"><br><br>

Course:
<input type="text" name="course"><br><br>

<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Student Details</h3>";
    echo "Name: " . $_POST["name"] . "<br>";
    echo "Age: " . $_POST["age"] . "<br>";
    echo "Course: " . $_POST["course"];
}
?>

</body>
</html>
