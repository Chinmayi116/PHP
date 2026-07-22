<!DOCTYPE html>
<html>
<body>

<form method="post">
Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user == "admin" && $pass == "1234")
        echo "Login Successful";
    else
        echo "Invalid Username or Password";
}
?>

</body>
</html>
