<?php
include 'db.php'; // Include the database connection

$id = $_GET['id']; // Get the user ID from the URL
$query = "SELECT * FROM users WHERE id = $id"; // Fetch user data
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result); // Get user data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the updated form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Update the user in the database
    $query = "UPDATE users SET name = '$name', email = '$email', phone = '$phone' WHERE id = $id";
    mysqli_query($con, $query);

    // Redirect back to the user list
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
        <label for="phone">Phone:</label><br>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>"><br><br>
        <button type="submit">Update User</button>
    </form>
    <br>
    <a href="index.php">Back to List</a>
</body>
</html>
