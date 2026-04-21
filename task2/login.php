<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = "SELECT * FROM project WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $qry);

    if (mysqli_num_rows($result) == 1) {
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
    <h2>login from</h2>
    <div class="login.from">
     <form action="login.php" method="post">
     <div class="from-group">
    <label for="username">username:</labrl>
    <input type="text" id="username" name="username" required><br><br>
    </div>

        <div class="from-group">
              <label for="password">Password:</label>
         <input type="password" id="password" name="password" required><br><br>
         </div>
        <button type="submit">Login</button>
       <style>
    body{
        font-family:Arial;
        max-width:400px;
        margin: auto;
    }
    input,button{
       width:100%
       padding:8px;
}
button {
    background-color: #4CAF50; /* 绿色背景 */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #45a049; /* 悬停颜色加深 */
}button {
    background-color: #4CAF50; /* 绿色背景 */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #45a049; /* 悬停颜色加深 */
}
</style>
</body>
</html>
