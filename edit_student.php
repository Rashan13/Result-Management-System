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

// Check if student_code is passed for editing
if (isset($_GET['student_code'])) {
    $student_code = $_GET['student_code'];
    
    // Fetch the existing student record
    $sql = "SELECT * FROM students WHERE student_code = '$student_code'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found!";
        exit;
    }
} else {
    echo "No student selected!";
    exit;
}

$conn->close();
?>

<!-- HTML Form to Edit Student Data -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
	<link rel="stylesheet" href="edit_student.css">
</head>
<body>
    <h2>Edit Student: <?php echo $row['student_name']; ?></h2>
    
    <form action="update_student.php" method="post">
        <input type="hidden" name="student_code" value="<?php echo $row['student_code']; ?>">
        
        <label for="student_name">Student Name:</label>
        <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>"><br>

        <label for="calculus_ii">Calculus II:</label>
        <input type="text" name="calculus_ii" value="<?php echo $row['calculus_ii']; ?>"><br>

        <label for="data_structure_algorithm">Data Structure & Algorithm:</label>
        <input type="text" name="data_structure_algorithm" value="<?php echo $row['data_structure_algorithm']; ?>"><br>

        <label for="data_communication">Data Communication:</label>
        <input type="text" name="data_communication" value="<?php echo $row['data_communication']; ?>"><br>

        <label for="hci">HCI:</label>
        <input type="text" name="hci" value="<?php echo $row['hci']; ?>"><br>

        <label for="oop">OOP:</label>
        <input type="text" name="oop" value="<?php echo $row['oop']; ?>"><br>

        <label for="se">SE:</label>
        <input type="text" name="se" value="<?php echo $row['se']; ?>"><br>

        <label for="sgpa">SGPA:</label>
        <input type="text" name="sgpa" value="<?php echo $row['sgpa']; ?>"><br>

        <label for="ygpa">YGPA:</label>
        <input type="text" name="ygpa" value="<?php echo $row['ygpa']; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
