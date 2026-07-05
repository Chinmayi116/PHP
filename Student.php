
Student.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD Operations</title>
</head>
<body>

<center>
    <h2>Student CRUD Operations</h2>

    <form method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Enter Roll No:</th>
                <td><input type="number" name="rollno" required></td>
            </tr>

            <tr>
                <th>Enter Student Name:</th>
                <td><input type="text" name="student_name"></td>
            </tr>

            <tr>
                <th>Enter Course:</th>
                <td><input type="text" name="course"></td>
            </tr>

            <tr>
                <th>Enter Year:</th>
                <td><input type="number" name="year"></td>
            </tr>

            <tr>
                <th>Enter Email:</th>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <th>Enter Contact No:</th>
                <td><input type="text" name="contact_no"></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="insert" value="Insert">
                    <input type="submit" name="retriew" value="Retrieve">
                    <input type="submit" name="update" value="Update">
                    <input type="submit" name="delete" value="Delete">
                </td>
            </tr>
        </table>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $conn = mysqli_connect("localhost", "root", "", "sd");

    if (!$conn)
    {
        die("Connection Failed: " . mysqli_connect_error());
    }

    echo "<br><b>Connected Successfully</b><br><br>";

    $rollno = $_POST['rollno'];

    /* INSERT */

    if (isset($_POST['insert']))
    {
        $student_name = $_POST['student_name'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];

        $sql = "INSERT INTO students
                (rollno, student_name, course, year, contact_no, email)
                VALUES
                ('$rollno','$student_name','$course','$year','$contact_no','$email')";

        if (mysqli_query($conn, $sql))
        {
            echo "<p><b>Record Inserted Successfully</b></p>";
        }
        else
        {
            echo "<p><b>Error:</b> " . mysqli_error($conn) . "</p>";
        }
    }

    /* RETRIEVE */

    if (isset($_POST['retriew']))
    {
        $sql = "SELECT * FROM students WHERE rollno='$rollno'";
        $res = mysqli_query($conn, $sql);

        if ($res && mysqli_num_rows($res) > 0)
        {
            echo "<h3>Record Found</h3>";

            echo "<table border='1' cellpadding='5'>
                    <tr>
                        <th>Roll No</th>
                        <th>Student Name</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>Contact No</th>
                        <th>Email</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($res))
            {
                echo "<tr>
                        <td>{$row['rollno']}</td>
                        <td>{$row['student_name']}</td>
                        <td>{$row['course']}</td>
                        <td>{$row['year']}</td>
                        <td>{$row['contact_no']}</td>
                        <td>{$row['email']}</td>
                      </tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "<p><b>No Record Found</b></p>";
        }
    }

    /* UPDATE */

    if (isset($_POST['update']))
    {
        $student_name = $_POST['student_name'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];

        $sql = "UPDATE students SET
                student_name='$student_name',
                course='$course',
                year='$year',
                contact_no='$contact_no',
                email='$email'
                WHERE rollno='$rollno'";

        if (mysqli_query($conn, $sql))
        {
            echo "<p><b>Record Updated Successfully</b></p>";
        }
        else
        {
            echo "<p><b>Update Failed:</b> " . mysqli_error($conn) . "</p>";
        }
    }

    /* DELETE */

    if (isset($_POST['delete']))
    {
        $sql = "DELETE FROM students WHERE rollno='$rollno'";

        if (mysqli_query($conn, $sql))
        {
            echo "<p><b>Record Deleted Successfully</b></p>";
        }
        else
        {
            echo "<p><b>Delete Failed:</b> " . mysqli_error($conn) . "</p>";
        }
    }

    mysqli_close($conn);
}
?>

</center>

</body>
</html>
