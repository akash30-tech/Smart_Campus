<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out - Smart Campus Management System</title>
    <link rel="stylesheet" href="logout.css">
    <meta http-equiv = refresh content = "7 ; URL = home.php" />
</head>
<body>
    <div class="logout-container">
        <div class="logout-box">
            <h2>You Have Been Logged Out</h2>
            <p>Your session has ended successfully. You can now return to the login page.</p>
            <a href="login.php" class="btn btn-login">Return to Login</a>
        </div>
    </div>
</body>
</html>
