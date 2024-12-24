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
        <?php require_once'Validation/3patientHeader.php'?>
        
            <section class="main">
                <div id="mainview">
                   
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
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>130/85</td>
                                    <td>72kg</td>
                                    <td>Normal</td>
                                    <td>36.8°C</td>
                                    <td>2024-05-17</td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>130/85</td>
                                    <td>72kg</td>
                                    <td>Normal</td>
                                    <td>36.8°C</td>
                                    <td>2024-05-17</td>
                                    
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

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>


