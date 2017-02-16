 <?php
$servername = "localhost";
$username = "root";
$password = "happyaf";

// Create connection
$conn = new mysqli($localhost, $root, $happyaf);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 