<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $data="Name: $name | Email: $email | Feedback: $feedback\n";

    file_put_contents("feedback.txt",$data,FILE_APPEND);

    echo "Feedback Submitted Successfully";
}
?>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Email:
    <input type="text" name="email"><br><br>

    Feedback:
    <textarea name="feedback"></textarea><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
