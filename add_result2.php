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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_code = $_POST['student_code'];
    $student_name = $_POST['student_name'];
    $information_technology_concepts = $_POST['information_technology_concepts'];
    $fundamentals_of_programming = $_POST['fundamentals_of_programming'];
    $mathematics = $_POST['mathematics'];
    $fundamental_of_electrical_engineering = $_POST['fundamental_of_electrical_engineering'];
    $programming_laboratory = $_POST['programming_laboratory'];
    $english_study_skills_for_ict = $_POST['english_study_skills_for_ict'];
    $sgpa = $_POST['sgpa'];
    $ygpa = $_POST['ygpa'];

    // Insert into the database
    $sql = "INSERT INTO students1 (student_code, student_name, information_technology_concepts, fundamentals_of_programming, mathematics, fundamental_of_electrical_engineering, programming_laboratory, english_study_skills_for_ict, sgpa, ygpa)
            VALUES ('$student_code', '$student_name', '$information_technology_concepts', '$fundamentals_of_programming', '$mathematics', '$fundamental_of_electrical_engineering', '$programming_laboratory', '$english_study_skills_for_ict', '$sgpa', '$ygpa')";

    if ($conn->query($sql) === TRUE) {
        echo "New result added successfully";
        header("Location: displayresult2.php");
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
