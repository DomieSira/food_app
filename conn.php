<?php
$servername = "localhost";
$username = "root";
$password = "dom"; // Replace this with the actual password for the root user
$dbname = "rail";

// Create a new connection object
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    // If there was an error, die with a helpful message
    die("Connection failed: " . $conn->connect_error);
}

// If we made it this far, the connection was successful
echo "Connected successfully!";

// Close the connection when we're done
$conn->close();
?>