<?php
// Database configuration
$servername = "165.232.144.187";
$username = "username";
$password = "password";
$database =  "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get signup form data
$susername = $_POST['signupUsername'];
$spassword = $_POST['signupPassword'];

// Prepare and execute SQL statement to insert user data into the database
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

$stmt->bind_param("ss", $susername, $spassword);

if ($stmt->execute()) {
    //echo "Signup successful";
    header("Location: index.php");
} else {
    echo "Error: " . $stmt->error;
}

echo "<p>Today's date is " . date("Y-m-d") . "</p>";

$stmt->close();
$conn->close();
?>

