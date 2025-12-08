<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Prevent SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    // Query to check if the username and password match
    $sql = "SELECT * FROM login WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login Successful!";
    } else {
        echo "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

    <link rel="stylesheet" href="style.css">
</head>
<body>
   <section class="login">
       <div class="form">
       <a href="login.php" class="logo">Journey<span>G<i class="fa-solid fa-compass"></i></span></a>
           <h1>Login Form</h1>
           <form action="loginweb.php" name="form" method="POST">
               <label for="user">Username:</label>
               <input type="text" id="user" name="user" required><br><br>
               <label for="pass">Password:</label>
               <input type="password" id="pass" name="pass" required><br><br>
               <input type="submit" id="btn" value="Login" name="submit">
           </form>
       </div>
   </section>
</body>
</html>
