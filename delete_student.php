<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #f54242;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 15px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-delete {
            background-color: #f54242;
            color: white;
        }

        .btn-cancel {
            background-color: #0a70f5;
            color: white;
        }

        .btn-delete:hover {
            background-color: #d73838;
        }

        .btn-cancel:hover {
            background-color: #084da6;
        }

        .msg {
            font-size: 1.1em;
            margin-bottom: 15px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Database connection
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

    // Check if student_code is set
    if (isset($_GET['student_code'])) {
        $student_code = $_GET['student_code'];

        // Query to delete the student
        $sql = "DELETE FROM students WHERE student_code='$student_code'";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Student Deleted</h1>";
            echo "<p class='msg'>The student with code <strong>$student_code</strong> has been deleted successfully.</p>";
        } else {
            echo "<h1>Error</h1>";
            echo "<p class='msg'>There was an error deleting the student: " . $conn->error . "</p>";
        }

        $conn->close();
    } else {
        echo "<h1>Error</h1>";
        echo "<p class='msg'>No student code provided.</p>";
    }
    ?>

    <a href="displayresult.php" class="btn btn-cancel">Back to Results</a>
</div>

</body>
</html>
