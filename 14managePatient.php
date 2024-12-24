<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="css/11doctorDash.css">
    <link rel="stylesheet" href="css/12docApp.css">
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
            <h2>Manage Patient</h2>
            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
            <table>
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Patient Name</th>
            <th>Patient Contact Number</th>
            <th>Patient Gender</th>
            <th>Creation Date</th>
            <th>Updation Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>1</td>
            <td>Rahul Singh</td>
            <td>452463210</td>
            <td>Male</td>
            <td>2024-05-16 11:08:35</td>
            <td></td>
            <td>
            <a href="13addPAtient.php" class="edit-btn">Edit</a>
            <a href="19viewPatient.php" class="view-btn">View</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            
            <td>Amit</td>
            <td>4545454545</td>
            <td>Male</td>
            <td>2024-05-16 14:46:26</td>
            <td></td>
            <td>
            <a href="13addPAtient.php" class="edit-btn">Edit</a>
            <a href="19viewPatient.php" class="view-btn">View</a>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
                
            </section>

        </main>
    </div>
</body>
</html>


