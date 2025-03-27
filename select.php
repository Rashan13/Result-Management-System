
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Management System</title>
    <link rel="stylesheet" href="select.css">
    <style>
        /* Slideshow container */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
            animation: slide 30s infinite;
        }

        /* Container */
        .container {
            position: relative;
            z-index: 1;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .left-section {
            margin-right: 50px;
        }

        .campus-image {
            width: 300px;
            height: auto;
        }

        .right-section {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            color: white;
        }

        /* Keyframes for background slideshow */
        @keyframes slide {
            0% { background-image: url('s1.jpg'); }
            25% { background-image: url('s5.jpg'); }
            50% { background-image: url('s3.jpg'); }
            75% { background-image: url('s4.jpg'); }
            100% { background-image: url('s1.jpg'); }
        }

        /* Styling for the form */
        form {
            display: flex;
            flex-direction: column;
        }

        label, select, button, .back-link {
            margin-bottom: 20px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-link {
            text-align: center;
            color: white;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="campus.png" alt="General Sir John Kotelawala Defence University" class="campus-image">
        </div>
        <div class="right-section">
            <h1>FOT</h1>
            <h2>RESULT MANAGEMENT SYSTEM</h2>
            <form action="dashboard.php" method="GET">
                <label for="degree">Degree</label>
                <select id="degree" name="degree" required>
                    <option value="" disabled selected>Select Degree</option>
                    <option value="construction">Bachelor of Engineering Technology Honours in Construction Technology</option>
                    <option value="building-services">Bachelor of Engineering Technology Honours in Building Services Technology</option>
                    <option value="ict">Bachelor of Technology Honours in Information and Communication Technology</option>
                    <option value="biomedical">Bachelor of Engineering Technology Honours in Biomedical Instrumentation Technology</option>
                    <option value="biotechnology">Bachelor of Biosystems Technology Honours in Applied Biotechnology</option>
                </select>

                <label for="intake">Intake</label>
                <select id="intake" name="intake" required>
                    <option value="" disabled selected>Select Intake</option>
                    <option value="39">Intake 39</option>
                    <option value="40">Intake 40</option>
                    <option value="41">Intake 41</option>
                </select>

                <button type="submit">Search</button>
            </form>
            <a href="index.html" class="back-link">Back to Home</a>
        </div>
    </div>
</body>
</html>
