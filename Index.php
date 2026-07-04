<!DOCTYPE html>
<html>
<head>
    <title>PHP Registration Form</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }
        .container{
            width:350px;
            margin:50px auto;
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
        h2{
            text-align:center;
        }
        input[type=text],
        input[type=email]{
            width:100%;
            padding:10px;
            margin:8px 0;
            border:1px solid #ccc;
            border-radius:5px;
            box-sizing:border-box;
        }
        input[type=submit]{
            width:100%;
            padding:10px;
            background:blue;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
        input[type=submit]:hover{
            background:darkblue;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>

    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "<h3>Registration Successful!</h3>";
        echo "<b>Name:</b> $name <br>";
        echo "<b>Email:</b> $email";
    }
    ?>

</div>

</body>
</html>
