<?php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password is empty
$dbname = "rms3";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_code = $_POST['student_code'];
    $student_name = $_POST['student_name'];
    $calculus_ii = $_POST['calculus_ii'];
    $data_structure_algorithm = $_POST['data_structure_algorithm'];
    $data_communication = $_POST['data_communication'];
    $hci = $_POST['hci'];
    $oop = $_POST['oop'];
    $se = $_POST['se'];
    $sgpa = $_POST['sgpa'];
    $ygpa = $_POST['ygpa'];

    // Insert into the database
    $sql = "INSERT INTO students (student_code, student_name, calculus_ii, data_structure_algorithm, data_communication, hci, oop, se, sgpa, ygpa)
            VALUES ('$student_code', '$student_name', '$calculus_ii', '$data_structure_algorithm', '$data_communication', '$hci', '$oop', '$se', '$sgpa', '$ygpa')";

    if ($conn->query($sql) === TRUE) {
        echo "New result added successfully";
		header("Location: displayresult.php");
		exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- Back to Home button -->
<div style="margin-top: 20px;">
    <a href="index.php">
        <button type="button">Back to Home</button>
    </a>
</div>
