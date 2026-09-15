<!DOCTYPE html>
<html>
<body>

<h2>Student Grade</h2>

<form method="post">
    Enter Marks:
    <input type="number" name="marks"><br><br>

    <input type="submit" value="Check Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST["marks"];

    if ($marks >= 90) {
        echo "Grade A";
    } elseif ($marks >= 75) {
        echo "Grade B";
    } elseif ($marks >= 60) {
        echo "Grade C";
    } elseif ($marks >= 35) {
        echo "Grade D";
    } else {
        echo "Fail";
    }
}
?>

</body>
</html>
