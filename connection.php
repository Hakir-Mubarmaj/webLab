<?php
$servername = "sql304.infinityfree.com";
$username = "if0_34471359"; // Replace with your MySQL username
$password = "nvvxWIiSbc"; // Replace with your MySQL password
$dbname = "if0_34471359_web"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
