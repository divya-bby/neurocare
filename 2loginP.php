<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/1top.css">
    <link rel="stylesheet" href="css/3login.css">
</head>
<body>
<div id="top">
<?php require_once'Validation/1loginHeader.php';?>
        <span><a href="4registration.php">Sign up</a></span>
</div>
<div id="body">
    <div class="login-box">
        <h2>Login | Patient</h2>
        <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter email">
                
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
            
            <a id="fp" href="5forgotPassword.php">Forgot your password?</a>

            <div class="login-button">
                <button type="submit" name="patient" value="patient">Login</button>
            </div>
        </form>
        <div class="register">
            <p>Don't have an account? <a href="4registration.php">Create a new account.</a></p>
        </div>
    </div>
</div>
</body>
</html>