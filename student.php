<!DOCTYPE html>
<html>
<body>

<h2>Student Details</h2>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Course:
    <input type="text" name="course"><br><br>

    <input type="submit" value="Display">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $course = htmlspecialchars($_POST["course"]);

    echo "<h3>Student Information</h3>";
    echo "Name: " . $name . "<br>";
    echo "Course: " . $course;
}
?>

</body>
</html>
