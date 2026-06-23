<?php
include("db.php");

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    mysqli_query($conn,
    "INSERT INTO students(name,email)
    VALUES('$name','$email')");
}
?>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Email:
    <input type="text" name="email"><br><br>

    <input type="submit" name="save" value="Save">
</form>

<?php
$result=mysqli_query($conn,"SELECT * FROM students");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
          </tr>";
}
echo "</table>";
?>
