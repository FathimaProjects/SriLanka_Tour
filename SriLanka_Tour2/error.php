<?php
// This file is to display login failure message

$error_message = "Invalid Username or Password!"; // Set your error message here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <section class="error">
       <div class="error-container">
           <div class="error-message">
               <h1>404 - Login Failed</h1>
               <p class="message">Oops! The username or password you entered is incorrect.</p>
               <p><strong>Error:</strong> <?php echo $error_message; ?></p>
               <a href="login.php" class="btn">Go Back to Login</a>
           </div>
       </div>
   </section>
</body>
</html>
