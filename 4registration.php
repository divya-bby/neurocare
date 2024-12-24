<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/1top.css">
    <link rel="stylesheet" href="css/4registration.css">
</head>
<body>
<div id="top">
<?php require_once'Validation/1loginHeader.php';?>
        <span><a href="2loginP.php">Login</a></span>
</div>
<div id="body">
    <div class="login-box">
    <h2>Register</h2>
        <form action="#" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter name">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required placeholder="Enter address">

            <label>Gender:</label>
        <div class="gender"><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </div><br>

        <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">

            <label for="contact">Contact Number</label>
            <input type="tel" id="contact" name="contact" required placeholder="Enter contact number">
                
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
                
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password">
            
            <label id="check">
            <input type="checkbox" name="privacyPolicy" required>
            I agree to the <a href="6privacyPolicy.php" target="_blank">Privacy Policy</a>.
            </label>
            
            <div class="register-button">
                <button type="submit" name="register" value="register">Sign up</button>
            </div>
        </form>
        <div class="login">
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</div>
</body>
</html>