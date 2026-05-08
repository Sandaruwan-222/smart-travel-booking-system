<?php

session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>

<html>
<head>
<title>Admin</title>
</head>

<body>

<h1>Welcome Admin</h1>
<br><br>

<a href="logout.php">Logout</a>

<a href="userdata.php">View Booking Data</a>
<br><br>

<a href="report.php">View Report</a>
</body>
</html>