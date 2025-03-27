<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rms3";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error message
$error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Ensure the new passwords match
    if ($newPassword !== $confirmPassword) {
        $error = "New passwords do not match.";
        header("Location: admin_pw.html?error=" . urlencode($error));
        exit;
    }

    // Replace 'admin' with the actual username or session variable for dynamic usage
    $sql = "SELECT password FROM users WHERE username = 'admin'";
    $result = $conn->query($sql);

    // Verify if the current password is correct
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify current password
        if (password_verify($currentPassword, $row['password'])) {
            // Hash the new password
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update the password in the database
            $updateSql = "UPDATE users SET password='$hashedPassword' WHERE username='admin'";
            if ($conn->query($updateSql) === TRUE) {
                header("Location: admin_pw.html?success=Password updated successfully.");
                exit;
            } else {
                $error = "Error updating password: " . $conn->error;
                header("Location: admin_pw.html?error=" . urlencode($error));
                exit;
            }
        } else {
            $error = "Current password is incorrect.";
            header("Location: admin_pw.html?error=" . urlencode($error));
            exit;
        }
    } else {
        $error = "User not found.";
        header("Location: admin_pw.html?error=" . urlencode($error));
        exit;
    }
}

// Close the connection
$conn->close();
?>
