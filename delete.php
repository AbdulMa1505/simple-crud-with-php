<?php
include 'db.php'; // Include the database connection

$id = $_GET['id']; // Get the user ID from the URL

// Delete the user from the database
$query = "DELETE FROM users WHERE id = $id";
mysqli_query($con, $query);

// Redirect back to the user list
header("Location: index.php");
?>
