CREATE DATABASE company;

USE company;

CREATE TABLE employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    department VARCHAR(50),
    salary DECIMAL(10,2)
);
<?php
$conn = mysqli_connect("localhost", "root", "", "company");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
<?php
include "db.php";

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee(name, department, salary)
            VALUES('$name', '$department', '$salary')";

    if(mysqli_query($conn, $sql))
        echo "Employee Added Successfully";
    else
        echo "Error";
}
?>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Department: <input type="text" name="department"><br><br>
    Salary: <input type="text" name="salary"><br><br>

    <input type="submit" name="save" value="Save">
</form>
<?php
include "db.php";

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee(name, department, salary)
            VALUES('$name', '$department', '$salary')";

    if(mysqli_query($conn, $sql))
        echo "Employee Added Successfully";
    else
        echo "Error";
}
?>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Department: <input type="text" name="department"><br><br>
    Salary: <input type="text" name="salary"><br><br>

    <input type="submit" name="save" value="Save">
</form><?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM employee");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Salary</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['department']."</td>";
    echo "<td>".$row['salary']."</td>";
    echo "<td>
    <a href='edit.php?id=".$row['id']."'>Edit</a> |
    <a href='delete.php?id=".$row['id']."'>Delete</a>
    </td>";
    echo "</tr>";
}

echo "</table>";
?><?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM employee WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    mysqli_query($conn, "UPDATE employee
    SET name='$name',
    department='$department',
    salary='$salary'
    WHERE id=$id");

    header("Location:view.php");
}
?>

<form method="post">
Name:
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Department:
<input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>

Salary:
<input type="text" name="salary" value="<?php echo $row['salary']; ?>"><br><br>

<input type="submit" name="update" value="Update">
</form><?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM employee WHERE id=$id");

header("Location:view.php");
?><?php
session_start();
$_SESSION["username"] = "Chinmayi";
echo $_SESSION["username"];
?><!DOCTYPE html>
<html>
<head>
<style>
p{
position:absolute;
width:300px;
height:40px;
overflow:hidden;
border:1px solid black;
background:lightgray;
padding:5px;
}

#p1{top:20px;left:50px;}
#p2{top:50px;left:50px;}
#p3{top:80px;left:50px;}
#p4{top:110px;left:50px;}

p:hover{
height:120px;
z-index:10;
background:white;
}
</style>
</head>

<body>

<p id="p1">
Paragraph One. This is the first paragraph. It becomes fully visible when the mouse is placed over it.
</p>

<p id="p2">
Paragraph Two. This is the second paragraph. It becomes fully visible when the mouse is placed over it.
</p>

<p id="p3">
Paragraph Three. This is the third paragraph. It becomes fully visible when the mouse is placed over it.
</p>

<p id="p4">
Paragraph Four. This is the fourth paragraph. It becomes fully visible when the mouse is placed over it.
</p>

</body>
</html>
