<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/1top.css">
    <link rel="stylesheet" href="css/3login.css">
    <style>
        .reset{
            margin-top: 15px;
        }
        .reset button:active{
            transform: scale(0.98);
        }
        </style>
</head>
<body>
<div id="top">
        <img id="logo" src="Photos/N.PNG" alt="logo">
        <?php require_once'Validation/1loginHeader.php';?>
        <span><a href="4registration.php">Sign up</a></span>
</div>
<div id="body">
    <div class="login-box">
        <h2>Forgot Password | Reset</h2>
        <form action="#" method="post">
            <label for="email">Enter email</label>
            <input type="email" id="email" name="email" required placeholder="Enter email">
                
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
                
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password">
            
            <div class="reset">
                <button type="submit" name="reset" value="reset">Reset</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>