<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor Dashboard</title>
        <link rel="stylesheet" href="css/11doctorDash.css">
        <link rel="stylesheet" href="css/19view.css">
    </head>
    <body>
        <div class="container">
        <?php require_once'Validation/2doctorHeader.php'?>
                        <div class="notifications">
                            <a href="#">Logout</a>
                        </div>
                </header>
        
            <section class="main">
                <div id="mainview">
                    <div class="view">
                        <h2>Your Details</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Doctor Name</td>
                                    <td>Alice</td>
                                    <td>Email</td>
                                    <td>alice12@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>452463210</td>
                                    <td>Address</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>Male</td>
                                    <td>Age</td>
                                    <td>32</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </section>
        </div>
    </body>
</html>


