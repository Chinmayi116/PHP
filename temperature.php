<!DOCTYPE html>
<html>
<body>

<h2>Count Vowels</h2>

<form method="post">
    Enter String:
    <input type="text" name="str">
    <input type="submit" value="Count">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = strtolower($_POST["str"]);
    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }

    echo "Number of Vowels = " . $count;
}
?>

</body>
</html>
