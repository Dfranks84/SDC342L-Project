<?php

// SDC342L Project - Main application page.

// Load the database connection.
require_once('config/database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Complaint Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h1>Customer Complaint Management System</h1>

        <p>Welcome to the Customer Complaint Management System.</p>

        <h2>Customer</h2>

        <ul>
            <li><a href="#">Register Account</a></li>
            <li><a href="#">Customer Login</a></li>
            <li><a href="#">Submit Complaint</a></li>
        </ul>

        <h2>Employee</h2>

        <ul>
            <li><a href="#">Technician Login</a></li>
            <li><a href="#">Administrator Login</a></li>
        </ul>

    </div>

</body>

</html>