<!DOCTYPE html>
<html>
<body>

<h2>Voting Eligibility</h2>

<form method="post">
    Enter Age:
    <input type="number" name="age"><br><br>

    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];

    if ($age >= 18) {
        echo "Eligible for Voting";
    } else {
        echo "Not Eligible for Voting";
    }
}
?>

</body>
</html>
