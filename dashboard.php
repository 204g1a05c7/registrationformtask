<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
// Fetch additional user data and display the dashboard
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to the Dashboard, User</h3><h1> <?php echo $user_id; ?></h1>
        <!-- Display user-specific content here -->
    </div>
</body>
</html>
