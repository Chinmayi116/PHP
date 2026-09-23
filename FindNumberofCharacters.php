<!DOCTYPE html>
<html>
<body>

<h2>Character Counter</h2>

<form method="post">
    Enter Text:
    <input type="text" name="text"><br><br>

    <input type="submit" value="Count">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    echo "Number of Characters = " . strlen($text);
}
?>

</body>
</html>
