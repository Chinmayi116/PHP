<!DOCTYPE html>
<html>
<body>

<h2>Student Marksheet</h2>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Subject 1:
    <input type="number" name="s1"><br><br>

    Subject 2:
    <input type="number" name="s2"><br><br>

    Subject 3:
    <input type="number" name="s3"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];
    $s3 = $_POST["s3"];

    $total = $s1 + $s2 + $s3;
    $percentage = $total / 3;

    echo "Name: " . $name . "<br>";
    echo "Total Marks: " . $total . "<br>";
    echo "Percentage: " . $percentage . "%";
}
?>

</body>
</html>
