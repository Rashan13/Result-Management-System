<?php
session_start();

// Dummy username and password for illustration
$valid_student = "62314";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student  = $_POST['student-id'];

    if ($student == $valid_student == $valid_student) {
        $_SESSION['student-id'] = $student;
        header("Location: resultsheet.php"); // Redirect to  results page
        exit();
    } else {
        echo "<script>alert('Invalid student-id');</script>";
    }
}
?>
