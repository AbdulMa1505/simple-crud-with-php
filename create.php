<?php
include 'db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert the new user into the database
    $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    mysqli_query($con, $query);

    // Redirect back to the user list
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label for="phone">Phone:</label><br>
        <input type="text" name="phone"><br><br>
        <button type="submit">Add User</button>
    </form>
    <br>
    <a href="index.php">Back to List</a>
</body>
</html>
