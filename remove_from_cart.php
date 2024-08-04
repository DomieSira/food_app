<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "dom"; // Replace this with the actual password for the root user
$dbname = "rail";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get item id from request
$itemId = $_POST['id'];

// Query to remove item from cart
$sql = "DELETE FROM cart WHERE id=$itemId";

// Execute query
$conn->query($sql);

// Close connection
$conn->close();
?>