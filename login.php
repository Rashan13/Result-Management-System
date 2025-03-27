<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL injection
    $username = $conn->real_escape_string($username);

    // Query to find the user by username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifying the password hash
        if (password_verify($password, $row['password'])) {
            // Password is correct, proceed to dashboard
            header("Location: dashboard.php");
            exit(); // Use exit() after a redirect
        } else {
            // Invalid password
            echo "Invalid username or password!";
        }
    } else {
        // User not found
        echo "Invalid username or password!";
    }
}
?>