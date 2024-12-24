<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="css/11doctorDash.css">
    <link rel="stylesheet" href="css/11dashbody.css">
</head>
<body>
    <div class="container">
       <?php require_once'Validation/2doctorHeader.php'?>
                <div class="notifications">
                    <a href="#">Logout</a>
                </div>
            </header>
        <!-- Main content -->
        <main class="main-content">
            <h2> Doctor | Dashboard</h2>
            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
                <div class="stat-card">
                    <h3>Today's Appointments</h3>
                    <a href="12doctorAppointment.php">View appointment</a>
                </div>
                <div class="stat-card">
                    <h3>My Profile</h3>
                    <a href="16doctorProfile.php">View personal info</a>
                </div>
                
            </section>

        </main>
    </div>
</body>
</html>

