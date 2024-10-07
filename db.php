<?php
// db.php
$host = 'localhost'; // Usually localhost
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password (leave empty if using XAMPP's default)
$database = 'CRUD'; // The database you created

// Create the connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
