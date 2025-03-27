<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result</title>
    <link rel="stylesheet" href="viewresult.css">
    <style> 
       /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    flex-direction: column;
}

h2 {
    text-align: center;
    color: #333;
}

.form-container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-weight: bold;
    color: #333;
}

input[type="text"], select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.button-container {
    display: flex;
    justify-content: space-between;
}

/* Button Styles */
button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    display: block;
    margin: 0 auto;
}


.view-button {
    background-color: #000C29;
    color: #fff;
}

.cancel-button {
    background-color: #f44336;
    color: #fff;
}

button:hover {
    opacity: 0.9;
}

/* Error Message Styles */
.error-message {
    color: #f44336;
    font-weight: bold;
    text-align: center;
    margin-top: 10px;
}

#error-messages {
    color: #f44336;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #000C29;
    color: white;
    font-weight: bold;
}

td {
    background-color: #f9f9f9;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #ddd;
}

/* Responsive Styles */
@media (max-width: 600px) {
    .form-container, table {
        width: 100%;
    }

    .button-container {
        flex-direction: column;
    }

    .button-container button {
        width: 100%;
        margin-bottom: 10px;
    }
}

    </style>
</head>
<body>

<div class="form-container">
    <div id="error-messages">
        <!-- Error messages will be inserted here -->
    </div>
    <form method="POST">
        <label for="student-id">Student ID :</label>
        <input type="text" id="student-id" name="student-id">

        <label for="semester">Select Semester :</label>
        <select id="semester" name="semester">
            <option value="" disabled selected>Select Semester</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option>
        </select>

        <div class="button-container">
            <button type="submit" class="view-button">View Result</button>
            <button type="button" class="cancel-button" onclick="location.href='index.html';">Cancel</button>
        </div>
        <div class="buttons">
            <button onclick="window.print()">Print/Download</button>
        </div>
    </form>
</div>

<div class="results-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentId = $_POST['student-id'];
        $semester = $_POST['semester'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rms3";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch records from the 'students' table
        $sql1 = "SELECT * FROM students WHERE student_code = '$studentId'";
        $result1 = $conn->query($sql1);

        // Fetch records from the 'students1' table
        $sql2 = "SELECT * FROM students1 WHERE student_code = '$studentId'";
        $result2 = $conn->query($sql2);

        // Display results from the 'students' table
        if ($result1->num_rows > 0) {
            echo "<h2>Results from Students Table</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Student Code</th>
                        <th>Student Name</th>
                        <th>Calculus II</th>
                        <th>Data Structure & Algorithm</th>
                        <th>Data Communication</th>
                        <th>HCI</th>
                        <th>OOP</th>
                        <th>SE</th>
                        <th>SGPA</th>
                        <th>YGPA</th>
                    </tr>";

            while($row = $result1->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['student_code'] . "</td>
                        <td>" . $row['student_name'] . "</td>
                        <td>" . $row['calculus_ii'] . "</td>
                        <td>" . $row['data_structure_algorithm'] . "</td>
                        <td>" . $row['data_communication'] . "</td>
                        <td>" . $row['hci'] . "</td>
                        <td>" . $row['oop'] . "</td>
                        <td>" . $row['se'] . "</td>
                        <td>" . $row['sgpa'] . "</td>
                        <td>" . $row['ygpa'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
       
        }

        // Display results from the 'students1' table
        if ($result2->num_rows > 0) {
            echo "<h2>Results from Students1 Table</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Student Code</th>
                        <th>Student Name</th>
                        <th>Information Technology Concepts</th>
                        <th>Fundamentals of Programming</th>
                        <th>Mathematics</th>
                        <th>Electrical Engineering</th>
                        <th>Programming Lab</th>
                        <th>SGPA</th>
                        <th>YGPA</th>
                    </tr>";

            while($row = $result2->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['student_code'] . "</td>
                        <td>" . $row['student_name'] . "</td>
                        <td>" . $row['information_technology_concepts'] . "</td>
                        <td>" . $row['fundamentals_of_programming'] . "</td>
                        <td>" . $row['mathematics'] . "</td>
                        <td>" . $row['fundamental_of_electrical_engineering'] . "</td>
                        <td>" . $row['programming_laboratory'] . "</td>
                        <td>" . $row['sgpa'] . "</td>
                        <td>" . $row['ygpa'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
           
        }

        $conn->close();
    }
    ?>
</div>

</body>
</html>
