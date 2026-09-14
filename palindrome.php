<!DOCTYPE html>
<html>
<body>

<h2>Palindrome Number</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num"><br><br>

    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $reverse = strrev((string)$num);

    if ((string)$num == $reverse) {
        echo "Palindrome Number";
    } else {
        echo "Not a Palindrome";
    }
}
?>

</body>
</html>
