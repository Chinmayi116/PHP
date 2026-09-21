<!DOCTYPE html>
<html>
<body>

<h2>Word Counter</h2>

<form method="post">
    Enter Sentence:
    <input type="text" name="sentence"><br><br>

    <input type="submit" value="Count">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = $_POST["sentence"];

    $words = str_word_count($sentence);

    echo "Number of Words = " . $words;
}
?>

</body>
</html>
