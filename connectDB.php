<?php //connectDB
$servername = "192.168.8.100";
$username = "root";
$password = "password";
$dbname = "hackaton";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");
//mysqli_query($conn, "utf-8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>