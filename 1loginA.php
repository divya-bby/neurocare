<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/1top.css">
    <link rel="stylesheet" href="css/3login.css">
    <style>
        .login-button{
            margin-top:15px;
        }
        </style>
</head>
<body>
<div id="top">
        <img id="logo" src="Photos/N.PNG" alt="logo">
        <nav>
            <ul>
            <li><a href="1homePage.php">Home</a></li>
                <li><a href="1homePage.php">About us</a></li>
                <li><a href="1homePage.php">Services</a></li>
                <li><a href="1homePage.php">Gallery</a></li>
                <li><a href="1homePage.php">Contact us</a></li>
            </ul>
        </nav>
        <span><a href="1homePage.php">Back</a></span>
</div>
<div id="body">
    <div class="login-box">
        <h2>Login | Admin</h2>
        <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter email">
                
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
            
            <div class="login-button">
                <button type="submit" name="doctor" value="doctor">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>