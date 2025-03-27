<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results</title>
    <link rel="stylesheet" href="displayresult.css">
</head>
<body>

<!-- Back to Home Button -->
<a href="dashboard.php" class="back-home">
    <button>Back to Home</button>
</a>

<h2>Student Results</h2>

<?php
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

// Fetch records from the database
$sql = "SELECT * FROM students1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the records in a table
    echo "<table border='1'>
            <tr>
                <th>Student Code</th>
                <th>Student Name</th>
                <th>Information Technology Concepts</th>
                <th>Fundamentals of Programming</th>
                <th>Mathematics</th>
                <th>Fundamental of Electrical Engineering</th>
                <th>Programming Laboratory</th>
                <th>SGPA</th>
                <th>YGPA</th>
                <th>Actions</th>
            </tr>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
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
                <td class='action-buttons'>
                    <a href='edit_student2.php?student_code=" . $row['student_code'] . "' class='edit-btn'>Edit</a>
                    <a href='delete_student.php?student_code=" . $row['student_code'] . "' class='delete-btn' onclick=\"return confirm('Are you sure you want to delete this student?');\">Delete</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>
</body>
</html>
