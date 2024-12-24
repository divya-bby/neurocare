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
                        <h2>Patient Details</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Patient Name</td>
                                    <td>Rahul Singh</td>
                                    <td>Patient Email</td>
                                    <td>rahul12@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Patient Mobile Number</td>
                                    <td>452463210</td>
                                    <td>Patient Address</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>Patient Gender</td>
                                    <td>Male</td>
                                    <td>Patient Age</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td>Patient Medical History</td>
                                    <td>Fever, Cold</td>
                                    <td>Patient Reg Date</td>
                                    <td>2024-05-16 11:08:35</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="view">
                        <h2>Medical History</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Blood Pressure</th>
                                    <th>Weight</th>
                                    <th>Blood Sugar</th>
                                    <th>Body Temperature</th>
                                    <th>Visit Date</th>
                                    <th>Assessment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>120/80</td>
                                    <td>70kg</td>
                                    <td>Normal</td>
                                    <td>36.6°C</td>
                                    <td>2024-05-16</td>
                                    <td><a href="17assessment.php" class="view-btn">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>130/85</td>
                                    <td>72kg</td>
                                    <td>Normal</td>
                                    <td>36.8°C</td>
                                    <td>2024-05-17</td>
                                    <td><a href="17assessment.php" class="view-btn">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>130/85</td>
                                    <td>72kg</td>
                                    <td>Normal</td>
                                    <td>36.8°C</td>
                                    <td>2024-05-17</td>
                                    <td><a href="17assessment.php" class="view-btn">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="view">
                        <h2>Prescription History</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Medicine Name</th>
                                    <th>Dosage</th>
                                    <th>Frequency</th>
                                    <th>Time</th>
                                    <th>Prescription  Date</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aspirin</td>
                                    <td>1 tablet</td>
                                    <td>1 per day</td>
                                    <td>For 3 days</td>
                                    <td>2024-05-16</td>
                                    <td>After meal</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Paracetamol</td>
                                    <td>1 tablet</td>
                                    <td>3 per day</td>
                                    <td>For 2 days</td>
                                    <td>2024-05-17</td>
                                    <td>After meal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="view">
                        <span>
                            <a href="18medicalhistory.php">Add New Record </a>
                        </span>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>


