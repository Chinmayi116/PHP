<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $con = mysqli_connect("localhost", "root", "", "student"); 
    if ($con === false) { 
        die("<br>Connection Failed: " . mysqli_connect_error()); 
    } 
 
    // Common input 
    $roll = $_POST['roll_number']; 
 
    // INSERT 
    if (isset($_POST['insert'])) { 
       $name = $_POST['student_name']; 
       $course = $_POST['course']; 
       $year = $_POST['year']; 
       $contact = $_POST['contact_number']; 
       $email = $_POST['email']; 
 
        $sql = "INSERT INTO student VALUES ('$roll','$name','$course','$year','$contact','$email')"; 
 
        if (mysqli_query($con, $sql)) { 
            echo "<p><b>✔ Record Inserted Successfully.</b></p>"; 
        } else { 
            echo "<p><b>✘ Error:</b> " . mysqli_error($con) . "</p>"; 
        } 
    } 
 
    // RETRIEVE 
    if (isset($_POST['retrieve'])) { 
        $sql = "SELECT * FROM student WHERE roll_number='$roll'"; 
        $res = mysqli_query($con, $sql); 
        if (mysqli_num_rows($res) > 0) { 
            echo "<h3>✔ Record Found:</h3> 
          <table border='1'> 
           <tr> 
                    <th>Roll_no</th><th>Student_Name</th><th>Course</th> 
                    <th>Year</th><th>Contact_number</th><th>Email</th> 
           </tr>"; 
            while ($row = mysqli_fetch_assoc($res)) { 
                echo "<tr> 
                        <td>{$row['roll_number']}</td> 
                        <td>{$row['student_name']}</td> 
                        <td>{$row['course']}</td> 
                        <td>{$row['year']}</td> 
                        <td>{$row['contact_number']}</td> 
                        <td>{$row['email']}</td>                         
                    </tr>"; 
            } 
            echo "</table>"; 
        } else { 
            echo "<p><b>✘ No record found for roll number = $roll</b></p>"; 
        } 
    } 
 
    // UPDATE 
    if (isset($_POST['update'])) { 
       $name = $_POST['student_name']; 
    $course = $_POST['course']; 
    $year = $_POST['year']; 
    $contact = $_POST['contact_number']; 
    $email = $_POST['email']; 
 
        $sql = "UPDATE student SET student_name='$name', course='$course', year='$year', contact_number='$contact', email='$email' WHERE roll_number='$roll'"; 
        if (mysqli_query($con, $sql)) { 
            echo "<p><b>✔ Record Updated Successfully.</b></p>"; 
        } else { 
            echo "<p><b>✘ Update Failed:</b> " . mysqli_error($con) . "</p>"; 
        } 
    } 
 
    // DELETE 
    if (isset($_POST['delete'])) { 
        $sql = "DELETE FROM student WHERE roll_number='$roll'"; 
        if (mysqli_query($con, $sql)) { 
            echo "<p><b>✔ Record Deleted Successfully.</b></p>"; 
        } else { 
            echo "<p><b>✘ Delete Failed:</b> " . mysqli_error($con) . "</p>"; 
        } 
    } 
 
    mysqli_close($con); 
} 
?> 
