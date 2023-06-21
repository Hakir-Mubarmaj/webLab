<?php
include 'connection.php';

$name = $_POST['name'];
$description = $_POST['description'];
$purchasePrice = $_POST['purchase_price'];
$quantity = $_POST['quantity'];

// Insert the new product into the 'products' table
$sql = "INSERT INTO products (name, description, purchase_price, quantity)
        VALUES ('$name', '$description', '$purchasePrice', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Product created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
