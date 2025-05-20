<?php

$conn = mysqli_connect('localhost', 'root', '', 'wipro');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$uid = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($uid > 0) {
    // Fetch user data
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
} else {
    echo "No user ID provided.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $updateSql = "UPDATE users SET username='$username', email='$email', password='$password' WHERE uid = $uid";
    mysqli_query($conn, $updateSql);

    echo "User updated successfully.";
    exit;
}
?>

<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" value="<?= $user['username'] ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $user['email'] ?>"><br><br>

    <label>Password:</label><br>
    <input type="text" name="password" value="<?= $user['password'] ?>"><br><br>

    <input type="submit" value="Update">
</form>
