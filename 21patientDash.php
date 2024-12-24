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
        <!-- Sidebar -->
        <?php require_once'Validation/3patientHeader.php'?>
        <!-- Main content -->
        <main class="main-content">
            <h2> Patient | Dashboard</h2>
            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
                <div class="stat-card">
                    <h3>Appointment History</h3>
                    <a href="12doctorAppointment.php">See your appointments</a>
                </div>
                <div class="stat-card">
                    <h3>Book Appointment</h3>
                    <a href="16doctorProfile.php">Book a new Appointment</a>
                </div>
            </section>

        </main>
    </div>
</body>
</html>

