<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neurological Assessment Chart</title>
    <style>
       .main-content {
    flex: 1;
    background: linear-gradient(to right, rgb(116, 182, 245), rgb(133, 248, 133));
    height: calc(100vh - 70px); /* Adjust height to fit the viewport */
    overflow-y: auto; /* Allow scrolling if content overflows */
}

.overview{
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center;
}

.form-section {
    text-align: right;
    margin:30px;
    background-color: #e0dfdf;
   padding: 20px 80px;
   border-radius: 8px; /* Rounded corners */
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}
.form-section h2 {
    color: #2a4d69;
    margin: 10px;
    margin-bottom: 20px;
    
}
.form-group {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
label {
    width: 200px;
    margin-right: 100px;
    text-align: right;
}
.form-section input[type="text"], input[type="date"] {
    width: 100%;
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input[type="date"]{
    width: 250px;
}
.form-group input[type="text"] {
    width: 250px;
}
button {
    background-color:  rgb(28, 177, 48);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: rgb(37, 214, 61);
}

button:active {
    transform: scale(0.98);
}

.assessment-form{
    margin:30px;
    background-color: #e0dfdf;
   padding: 20px 80px;
   border-radius: 8px; /* Rounded corners */
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}
.section-title{
    font-weight: bold;
    color: #2a4d69;
    margin: 10px;
    margin-bottom: 20px;
}
.form-group1 {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

    </style>
</head>
<body>

    
    
    <form action="/submit-neuro-assessment" method="POST">

        <!-- Mental Status -->
         <div class="assessment-form">
         <h2>Neurological Assessment Chart</h2>
        <div class="form-section1">
            <div class="section-title">Mental Status</div>
            <div class="form-group1">
                <label for="consciousness">Consciousness</label>
                <select id="consciousness" name="consciousness">
                    <option value="alert">Alert</option>
                    <option value="drowsy">Drowsy</option>
                    <option value="confused">Confused</option>
                    <option value="unresponsive">Unresponsive</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="orientation">Orientation (Person, Time, Place)</label>
                <input type="text" id="orientation" name="orientation">
            </div>
            <div class="form-group1">
                <label for="memory">Memory</label>
                <input type="text" id="memory" name="memory" placeholder="Short-term / Long-term">
            </div>
        </div>

        <!-- Cranial Nerve Examination -->
        <div class="form-section1">
            <div class="section-title">Cranial Nerve Examination</div>
            <div class="form-group1">
                <label for="cn1">CN I (Olfactory)</label>
                <select id="cn1" name="cn1">
                    <option value="normal">Normal</option>
                    <option value="abnormal">Abnormal</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="cn2">CN II (Optic)</label>
                <select id="cn2" name="cn2">
                    <option value="normal">Normal</option>
                    <option value="abnormal">Abnormal</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="cn3_12">CN III - XII (Other Cranial Nerves)</label>
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
                <label for="muscle_strength">Muscle Strength</label>
                <select id="muscle_strength" name="muscle_strength">
                    <option value="normal">Normal</option>
                    <option value="weak">Weak</option>
                    <option value="paralysis">Paralysis</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="tone">Muscle Tone</label>
                <select id="tone" name="tone">
                    <option value="normal">Normal</option>
                    <option value="hypertonia">Hypertonia</option>
                    <option value="hypotonia">Hypotonia</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="coordination">Coordination (e.g., finger-to-nose)</label>
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
                <label for="pain">Pain Sensation</label>
                <select id="pain" name="pain">
                    <option value="normal">Normal</option>
                    <option value="diminished">Diminished</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="touch">Touch Sensation</label>
                <select id="touch" name="touch">
                    <option value="normal">Normal</option>
                    <option value="diminished">Diminished</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="temperature">Temperature Sensation</label>
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
                <label for="biceps_reflex">Biceps Reflex</label>
                <select id="biceps_reflex" name="biceps_reflex">
                    <option value="normal">Normal</option>
                    <option value="hyperreflexive">Hyperreflexive</option>
                    <option value="hyporeflexive">Hyporeflexive</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="patellar_reflex">Patellar Reflex</label>
                <select id="patellar_reflex" name="patellar_reflex">
                    <option value="normal">Normal</option>
                    <option value="hyperreflexive">Hyperreflexive</option>
                    <option value="hyporeflexive">Hyporeflexive</option>
                </select>
            </div>
            <div class="form-group1">
                <label for="ankle_reflex">Ankle Reflex</label>
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

        <button type="submit">Submit Assessment</button>
    </form>

</body>
</html>
