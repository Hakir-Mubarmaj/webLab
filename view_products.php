<?php
include 'connection.php';

// Retrieve all products from the 'products' table
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
        echo "Purchase Price: $" . $row["purchase_price"] . "<br>";
        echo "Quantity: " . $row["quantity"] . "<br><br>";
    }
} else {
    echo "No products found.";
}

$conn->close();
?>
