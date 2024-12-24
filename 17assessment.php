<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor Dashboard</title>
        <link rel="stylesheet" href="css/11doctorDash.css">
        <link rel="stylesheet" href="css/19view.css">
        <link rel="stylesheet" href="css/17assessment.css">
    </head>
    <body>
        <div class="container">
            <?php require_once'Validation/2doctorHeader.php'?>
                        <div class="notifications">
                            <a href="19viewPatient.php">Back</a>
                        </div>
                </header>
        
            <section class="main">
                <div id="mainview">
                    <div class="view">
                        <h2>Neurological Assessment</h2>
                        <table>
        
        <tbody>
            <!-- Mental Status Section -->
            <tr>
                <td class="section-title" colspan="2">Mental Status</td>
            </tr>
            <tr>
                <td>Consciousness</td>
                <td id="consciousness">Alert</td>
            </tr>
            <tr>
                <td>Orientation</td>
                <td id="orientation">Person, Time, Place</td>
            </tr>
            <tr>
                <td>Memory</td>
                <td id="memory">Short-term</td>
            </tr>

            <!-- Cranial Nerve Examination Section -->
            <tr>
                <td class="section-title" colspan="2">Cranial Nerve Examination</td>
            </tr>
            <tr>
                <td>CN I (Olfactory)</td>
                <td id="cn1">Normal</td>
            </tr>
            <tr>
                <td>CN II (Optic)</td>
                <td id="cn2">Abnormal</td>
            </tr>
            <tr>
                <td>CN III - XII (Other Nerves)</td>
                <td id="cn3_12">Normal</td>
            </tr>

            <!-- Motor System Section -->
            <tr>
                <td class="section-title" colspan="2">Motor System</td>
            </tr>
            <tr>
                <td>Muscle Strength</td>
                <td id="muscle_strength">Weak</td>
            </tr>
            <tr>
                <td>Muscle Tone</td>
                <td id="tone">Hypertonia</td>
            </tr>
            <tr>
                <td>Coordination</td>
                <td id="coordination">Impaired</td>
            </tr>

            <!-- Sensory System Section -->
            <tr>
                <td class="section-title" colspan="2">Sensory System</td>
            </tr>
            <tr>
                <td>Pain Sensation</td>
                <td id="pain">Diminished</td>
            </tr>
            <tr>
                <td>Touch Sensation</td>
                <td id="touch">Absent</td>
            </tr>
            <tr>
                <td>Temperature Sensation</td>
                <td id="temperature">Normal</td>
            </tr>

            <!-- Reflexes Section -->
            <tr>
                <td class="section-title" colspan="2">Reflexes</td>
            </tr>
            <tr>
                <td>Biceps Reflex</td>
                <td id="biceps_reflex">Hyperreflexive</td>
            </tr>
            <tr>
                <td>Patellar Reflex</td>
                <td id="patellar_reflex">Normal</td>
            </tr>
            <tr>
                <td>Ankle Reflex</td>
                <td id="ankle_reflex">Hyporeflexive</td>
            </tr>

            <!-- Additional Notes Section -->
            <tr>
                <td class="section-title" colspan="2">Additional Notes</td>
            </tr>
            <tr>
                <td colspan="2" id="notes">No additional notes provided.</td>
            </tr>
        </tbody>
    </table>
                    </div>
                    
                   
                </div>
            </section>
        </div>
    </body>
</html>


