<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd</title>
</head>
<body>

<h2>Even or Odd Number</h2>

<form method="post">
    Enter a Number:
    <input type="number" name="num">
    <input type="submit" name="check" value="Check">
</form>

<?php
if(isset($_POST['check']))
{
    $num = $_POST['num'];

    if($num % 2 == 0)
        echo "$num is Even.";
    else
        echo "$num is Odd.";
}
?>

</body>
</html>
