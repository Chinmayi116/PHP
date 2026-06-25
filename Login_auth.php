<?php
if(isset($_POST['login']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];

    if($user=="admin" && $pass=="12345")
        echo "Welcome Admin";
    else
        echo "Invalid Username or Password";
}
?>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Login">
</form>
