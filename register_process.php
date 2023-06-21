<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Encrypt the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert the new user into the 'users' table
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
