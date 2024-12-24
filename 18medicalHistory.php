<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor Dashboard</title>
        <link rel="stylesheet" href="css/11doctorDash.css">
        <link rel="stylesheet" href="css/18medicalHistory.css">
    </head>
    <body>
        <div class="container">
        <?php require_once'Validation/2doctorHeader.php'?>
                <div class="notifications">
                    <a href="19viewPatient.php">Back</a>
                </div>
            </header>
                    
            <!-- Main content -->
            <main class="main-content">
                <section class="overview">
                    <div class="form-container">
                        <form action="/submit-history" method="POST">
                            <div class="form-section">
                                <h2>Medical History</h2>

                                <div class="form-group">
                                    <label for="blood_pressure_1">Blood Pressure:</label>
                                    <input type="text" id="blood_pressure_1" name="blood_pressure_1" value="120/80">
                                </div>
                                <div class="form-group">
                                    <label for="weight_1">Weight:</label>
                                    <input type="text" id="weight_1" name="weight_1" >
                                </div>
                                <div class="form-group">
                                    <label for="blood_sugar_1">Blood Sugar:</label>
                                    <input type="text" id="blood_sugar_1" name="blood_sugar_1" >
                                </div>
                                <div class="form-group">
                                    <label for="body_temperature_1">Body Temperature:</label>
                                    <input type="text" id="body_temperature_1" name="body_temperature_1" >
                                </div>
                                <div class="form-group">
                                    <label for="visit_date_1">Visit Date:</label>
                                    <input type="date" id="visit_date_1" name="visit_date_1" >
                                </div>
                                <button type="submit">Submit</button>
                                </div>
                        </form>
                        <form action="/submit-history" method="POST">
                            <div class="form-section">
                                <h2>Prescription History</h2>
                                <div class="form-group">
                                    <label for="medicine_name_1">Medicine Name:</label>
                                    <input type="text" id="medicine_name_1" name="medicine_name_1" >
                                </div>
                                <div class="form-group">
                                    <label for="dosage_1">Dosage:</label>
                                    <input type="text" id="dosage_1" name="dosage_1" >
                                </div>
                                <div class="form-group">
                                    <label for="frequency_1">Frequency:</label>
                                    <input type="text" id="frequency_1" name="frequency_1" >
                                </div>
                                <div class="form-group">
                                    <label for="time_1">Time:</label>
                                    <input type="text" id="time_1" name="time_1" >
                                </div>
                                <div class="form-group">
                                    <label for="prescription_date_1">Prescription Date:</label>
                                    <input type="date" id="prescription_date_1" name="prescription_date_1" >
                                </div>
                                <div class="form-group">
                                    <label for="remarks_1">Remarks:</label>
                                    <input type="text" id="remarks_1" name="remarks_1" >
                                </div>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                        <form action="/submit-neuro-assessment" method="POST">
                            <!-- Mental Status -->
                            <div class="assessment-form">
                                <h2>Neurological Assessment Chart</h2>
                                <div class="form-section1">
                                    <div class="section-title">Mental Status</div>
                                    <div class="form-group1">
                                        <label for="consciousness">Consciousness:</label>
                                        <select id="consciousness" name="consciousness">
                                            <option value="alert">Alert</option>
                                            <option value="drowsy">Drowsy</option>
                                            <option value="confused">Confused</option>
                                            <option value="unresponsive">Unresponsive</option>
                                            </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="orientation">Orientation (Time, Place):</label>
                                        <input type="text" id="orientation" name="orientation">
                                    </div>
                                    <div class="form-group1">
                                        <label for="memory">Memory:</label>
                                        <input type="text" id="memory" name="memory" placeholder="Short-term / Long-term">
                                    </div>
                                </div>
                                <!-- Cranial Nerve Examination -->
                                <div class="form-section1">
                                    <div class="section-title">Cranial Nerve Examination</div>
                                    <div class="form-group1">
                                        <label for="cn1">CN I (Olfactory):</label>
                                        <select id="cn1" name="cn1">
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="cn2">CN II (Optic):</label>
                                        <select id="cn2" name="cn2">
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="cn3_12">CN III-XII (Other Nerves):</label>
                                        <select id="cn3_12" name="cn3_12">
                                            <option value="normal">Normal</option>
                                            <option value="abnormal">Abnormal</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Motor System -->
                                <div class="form-section1">
                                    <div class="section-title">Motor System</div>
                                    <div class="form-group1">
                                        <label for="muscle_strength">Muscle Strength:</label>
                                        <select id="muscle_strength" name="muscle_strength">
                                            <option value="normal">Normal</option>
                                            <option value="weak">Weak</option>
                                            <option value="paralysis">Paralysis</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="tone">Muscle Tone:</label>
                                        <select id="tone" name="tone">
                                            <option value="normal">Normal</option>
                                            <option value="hypertonia">Hypertonia</option>
                                            <option value="hypotonia">Hypotonia</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="coordination">Coordination :</label>
                                        <select id="coordination" name="coordination">
                                            <option value="normal">Normal</option>
                                            <option value="impaired">Impaired</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Sensory System -->
                                <div class="form-section1">
                                    <div class="section-title">Sensory System</div>
                                    <div class="form-group1">
                                        <label for="pain">Pain Sensation:</label>
                                        <select id="pain" name="pain">
                                            <option value="normal">Normal</option>
                                            <option value="diminished">Diminished</option>
                                            <option value="absent">Absent</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="touch">Touch Sensation:</label>
                                        <select id="touch" name="touch">
                                            <option value="normal">Normal</option>
                                            <option value="diminished">Diminished</option>
                                            <option value="absent">Absent</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="temperature">Temperature Sensation:</label>
                                        <select id="temperature" name="temperature">
                                            <option value="normal">Normal</option>
                                            <option value="diminished">Diminished</option>
                                            <option value="absent">Absent</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Reflexes -->
                                <div class="form-section1">
                                    <div class="section-title">Reflexes</div>
                                    <div class="form-group1">
                                        <label for="biceps_reflex">Biceps Reflex:</label>
                                        <select id="biceps_reflex" name="biceps_reflex">
                                            <option value="normal">Normal</option>
                                            <option value="hyperreflexive">Hyperreflexive</option>
                                            <option value="hyporeflexive">Hyporeflexive</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="patellar_reflex">Patellar Reflex:</label>
                                        <select id="patellar_reflex" name="patellar_reflex">
                                            <option value="normal">Normal</option>
                                            <option value="hyperreflexive">Hyperreflexive</option>
                                            <option value="hyporeflexive">Hyporeflexive</option>
                                        </select>
                                    </div>
                                    <div class="form-group1">
                                        <label for="ankle_reflex">Ankle Reflex:</label>
                                        <select id="ankle_reflex" name="ankle_reflex">
                                            <option value="normal">Normal</option>
                                            <option value="hyperreflexive">Hyperreflexive</option>
                                            <option value="hyporeflexive">Hyporeflexive</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Additional Notes -->
                                <div class="form-section1">
                                    <div class="section-title">Additional Notes</div>
                                    <textarea name="notes" id="notes" placeholder="Any other neurological findings or observations..."></textarea>
                                </div>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>

