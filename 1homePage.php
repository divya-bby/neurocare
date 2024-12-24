
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/1top.css">
        <link rel="stylesheet" href="css/2homePage.css">
    </head>
    <body>
        <div id="top">
                <img id="logo" src="Photos/N.PNG" alt="logo">
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </nav>
                <span><a href="#home">Logins</a></span>
        </div>
        <div id="container">
            <section id="home">
                <h1>Neuro Care Hub</h1>
                <h2>Logins</h2>
                <div class="login-container">
                    <div class="login-box">
                        <h3>Patient Login</h3>
                        <a href="2loginP.php">Click here</a>
                    </div>
                    <div class="login-box">
                        <h3>Doctor Login</h3>
                        <a href="3loginD.php">Click here</a>
                    </div>
                </div>
            </section>

            <section id="services">
                <h2>Our Services</h2>
                <p>We provide these key services.</p>
                <div class="service-container">
                    <div class="service-box">
                        <h3>Appointments</h3>
                    </div>
                    <div class="service-box">
                        <h3>Laboratory</h3>
                    </div>
                    <div class="service-box">
                        <h3>Prescriptions</h3>
                    </div>

                    <div class="service-box">
                        <h3>Medical history</h3>
                    </div>
                    <div class="service-box">
                        <h3>Consulting</h3>
                    </div>
                    <div class="service-box">
                        <h3>Quality Care</h3>
                    </div>
                </div>
            </section>

            <section id="about">
                <h2>About Us</h2>
                <p>This is about us section.</p>
            </section>


            <section id="gallery">
                <h2>Our gallery</h2>
                <img src="Photos/download2.jpg" alt="Hospital Image 2">
                <img src="Photos/download1.jpg" alt="Hospital Image 1">
                <img src="Photos/download4.jpg" alt="Hospital Image 4">
            </section>

            <section id ="contact">
                <div class="box">
                    <h2>Contact Form</h2>
                    <form action="#" method="POST">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required placeholder="Enter name">
                        
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email">

                        <label for="contact">Contact Number</label>
                        <input type="tel" id="contact" name="contact" required placeholder="Enter contact number">
                        
                        <label for="message">Enter Message</label>
                        <textarea id="message" name="message" rows="5" cols="40" placeholder="Write your message here..."></textarea>
            

                        <div class="register-button">
                            <button type="submit" name="register" value="register">Send Message</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
            <footer>
                <div id="info">
                    <ul>
                        <li>Bagbazar, Kathmandu</li>
                        <li>info@neurocare.com</li>
                        <li>01-123455</li>
                    </ul>
                </div>
                <div id="more">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="6privacyPolicy.php">Privacy Policy</a></li>
                        <li><a href="7termsAndCondition.php">Terms and Conditions</a></li>
                        <li><a href="8helpAndSupport.php">Help and Support</a></li>
                    </ul>
                </div>
                <div id="last">
                    <p>&copy; 2024 Neuro Care Hub. All rights reserved.</p>
                </div>
        </footer>
    </body>
</html>
