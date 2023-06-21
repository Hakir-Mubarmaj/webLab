<?php
session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve the user's data
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];

    // Verify the submitted password
    if (password_verify($password, $hashedPassword)) {
        $_SESSION['username'] = $username;
        echo "Login successful!";
        // Redirect to the desired page
        // header("Location: dashboard.php");
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>
