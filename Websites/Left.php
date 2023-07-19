<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO data (Direction) VALUES (?)");
$stmt->bind_param("s", $direction);

// Set parameters and execute
$direction = "Left";
$stmt->execute();

echo "Left";

$stmt->close();
$conn->close();
?>