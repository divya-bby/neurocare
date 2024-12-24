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
    <?php require_once'Validation/3patientHeader.php'?>
        <!-- Main content -->
        <main class="main-content">
            <h2> Appointment History</h2>
            <!-- Dashboard Overview -->
            <section class="dashboard-overview">
            <table>
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Doctor Name</th>
            <th>Appointment Date </th>
            <th>Appointment Time</th>
            <th>Appointment Creation Date</th>
            <th>Current Status</th>
            <th>Fees</th>
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
            <td>Rs.250</td>
            
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            
            <td>2024-12-26 </th>
             <th>02:00 PM</td>
            <td>2024-12-21 </td>
            <td>Pending</td>
            <td>Rs.20</td>
        <!-- Add more rows as needed -->
    </tbody>
</table>
                
            </section>

        </main>
    </div>
</body>
</html>

