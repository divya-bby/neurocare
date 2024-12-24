<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="css/11doctorDash.css">
    <link rel="stylesheet" href="css/13addPatient.css">
</head>
<body>
    <div class="container">
    <?php require_once'Validation/3patientHeader.php'?>
            
        <!-- Main content -->
        <main class="main-content">
            
            <section class="overview">
            <div class="form-container">
                <h2>Book Appointment</h2>
        <form action="#" method="POST">
        <label for="specialization">Doctor Specialization</label>
            <input type="text" id="specialization" name="specialization" value="Neurologists" readonly>

            <!-- Select Doctor -->
            <label for="doctor">Select Doctor</label>
            <select id="doctor" name="doctor">
                <option value="dr1">Dr. John Doe</option>
                <option value="dr2">Dr. Jane Smith</option>
                <option value="dr3">Dr. Emily White</option>
            </select>

            <!-- Consultancy Fees -->
            <label for="fees">Consultancy Fees</label>
            <input type="text" id="fees" name="fees" placeholder="Enter Consultancy Fees">

            <!-- Date -->
            <label for="date">Date</label>
            <input type="date" id="date" name="date">

            <!-- Time -->
            <label for="time">Time</label>
            <input type="time" id="time" name="time" value="13:45">
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</section>
        </main>
    </div>
</body>
</html>

