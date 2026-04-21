<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = "admin";
    $valid_password = "password123";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <div class="register form">
    <form action="register.php" method="post">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        </div>

        <div class="form-group">
                <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    <style>
        body{
            font-family:Arial;
            max-width:400px;
            margin: auto;  
        }
        input,button{
            width:100%;
            padding:8px;
            margin:5px ;
        }
    
</body>
</html>
</body>
</html>