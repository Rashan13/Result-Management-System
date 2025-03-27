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
    $sql = "SELECT * FROM students1 WHERE student_code = '$student_code'";
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
    
    <form action="update_student2.php" method="post">
        <input type="hidden" name="student_code" value="<?php echo $row['student_code']; ?>">
        
        <label for="student_name">Student Name:</label>
        <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>"><br>

        <label for="information_technology_concepts">information technology concepts:</label>
        <input type="text" name="information_technology_concepts" value="<?php echo $row['information_technology_concepts']; ?>"><br>

        <label for="fundamentals_of_programming">fundamentals of programming:</label>
        <input type="text" name="fundamentals_of_programming" value="<?php echo $row['fundamentals_of_programming']; ?>"><br>

        <label for="mathematics">mathematics:</label>
        <input type="text" name="mathematics" value="<?php echo $row['mathematics']; ?>"><br>

        <label for="fundamental_of_electrical_engineering">fundamental of electrical engineering:</label>
        <input type="text" name="fundamental_of_electrical_engineering" value="<?php echo $row['fundamental_of_electrical_engineering']; ?>"><br>

        <label for="programming_laboratory">programming laboratory:</label>
        <input type="text" name="programming_laboratory" value="<?php echo $row['programming_laboratory']; ?>"><br>

        <label for="sgpa">SGPA:</label>
        <input type="text" name="sgpa" value="<?php echo $row['sgpa']; ?>"><br>

        <label for="ygpa">YGPA:</label>
        <input type="text" name="ygpa" value="<?php echo $row['ygpa']; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
