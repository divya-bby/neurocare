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
    <?php require_once'Validation/2doctorHeader.php'?>
                <div class="notifications">
                    <a href="#">Logout</a>
                </div>
            </header>
            
        <!-- Main content -->
        <main class="main-content">
            
            <section class="overview">
            <div class="form-container">
                <h2>Add New Patient</h2>
        <form action="#" method="POST">
            <!-- Patient Name -->
            <label for="patientName">Patient Name</label>
            <input type="text" id="patientName" name="patientName" placeholder="Enter Patient Name" required>

            <!-- Patient Contact -->
            <label for="patientContact">Patient Contact no</label>
            <input type="text" id="patientContact" name="patientContact" placeholder="Enter Patient Contact no" required>

            <!-- Patient Email -->
            <label for="patientEmail">Patient Email</label>
            <input type="email" id="patientEmail" name="patientEmail" placeholder="Enter Patient Email id" required>

            <!-- Gender -->
            <label>Gender</label>
            <div class="gender-group">
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="others">Others</label>
                <input type="radio" id="others" name="gender" value="others">
            </div>

            <!-- Patient Address -->
            <label for="patientAddress">Patient Address</label>
            <input type="text" id="patientAddress" name="patientAddress" placeholder="Enter Patient Address" required>

            <!-- Patient Age -->
            <label for="patientAge">Patient Age</label>
            <input type="number" id="patientAge" name="patientAge" placeholder="Enter Patient Age" required>

            <!-- Medical History -->
            <label for="medicalHistory">Medical History</label>
            <textarea id="medicalHistory" name="medicalHistory" placeholder="Enter Patient Medical History (if any)" rows="4"></textarea>

            <label for="creationDate">Creation Date</label>
            <input type="date" id="creationDate" name="creationDate" placeholder="Enter Date" required>
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Add Patient</button>
        </form>
    </div>
</section>
        </main>
    </div>
</body>
</html>

