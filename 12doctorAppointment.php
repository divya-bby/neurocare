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
            <h2> Appointment History</h2>
            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
            <table>
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Patient Name</th>
            <th>Appointment Date </th>
            <th>Appointment Time</th>
            <th>Appointment Creation Date</th>
            <th>Current Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            
            <td>2024-12-25</th> 
            <th>10:00 AM</td>
            <td>2024-12-20 </td>
            <td>Confirmed</td>
            <td>
            <a href="#" class="confirm-btn">Confirm</a>
            <a href="#" class="cancel-btn">Cancel</a>
            </td>
            
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            
            <td>2024-12-26 </th>
             <th>02:00 PM</td>
            <td>2024-12-21 </td>
            <td>Pending</td>
            <td>
            <a href="#" class="confirm-btn">Confirm</a>
            <a href="#" class="cancel-btn">Cancel</a>
            </td>
        <!-- Add more rows as needed -->
    </tbody>
</table>
                
            </section>

        </main>
    </div>
</body>
</html>

