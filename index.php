<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h2>Create Product</h2>
    <form method="POST" action="create_product_process.php">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Description:</label>
        <textarea name="description" required></textarea><br><br>
        <label>Purchase Price:</label>
        <input type="number" step="0.01" name="purchase_price" required><br><br>
        <label>Quantity:</label>
        <input type="number" name="quantity" required><br><br>
        <input type="submit" value="Create">
    </form>
    <br>
    <p>Already have an account? <a href="login.php">Login</a></p>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>
