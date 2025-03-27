

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS | Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="sidebar">
        <h2>RMS | Admin</h2>
        <ul>
            <p><b><h3><left >Main Category</left></h3></b></p>
            <li><a href="dashboard.php" class="active">Dashboard</a></li>
            <p><b><h3><left>Appearance</left></h3></b></p>
            <li><a href="select.html">Add Results</a></li>
            <li><a href="selectvw.html">View Results</a></li>
            <li><a href="notice.html">Notices</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="admin_pw.html">Admin Change Password</a></li>
            <li><a href="add_users.php">Add New User</a></li>
        </ul>
    </div>

    <div class="content">
        <header>
            <h2>Dashboard</h2>
            <a href="index.html" class="logout-button">Logout</a>

        </header>

        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <h3>4</h3>
                    <p>Departments</p>
                </div>
            </div>
            <div class="card red">
                <div class="card-content">
                    <h3>20</h3>
                    <p>Lectures</p>
                </div>
            </div>
            <div class="card orange">
                <div class="card-content">
                    <h3>550</h3>
                    <p>Students</p>
                </div>
            </div>
            <div class="card green">
                <div class="card-content">
                    <h3>83</h3>
                    <p>Modules</p>
                </div>
            </div>
        </div>
    </div>
    
        
    </div>
    <script src="scripts.js"></script>
    <script src="jscripts.js"></script>
</body>
</html>
